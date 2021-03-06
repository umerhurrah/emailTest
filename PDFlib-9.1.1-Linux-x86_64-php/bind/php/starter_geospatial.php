<?php
/* $Id: starter_geospatial.php,v 1.7.2.3 2016/07/28 10:30:16 rp Exp $
 * Starter for georeferenced PDF:
 * Import an image with a map and add geospatial reference information
 *
 * Sample map and coordinates:
 * We use a map from www.openstreetma$p->com; the geospatial coordinates of the
 * image edges were also provided by that Web site.
 * The coordinate system is WGS84 which is also used for GPS.
 *
 * Required software: PDFlib/PDFlib+PDI/PPS 9
 * Required data: image file and associated geospatial reference information
 */

/* This is where the data files are. Adjust if necessary. */
$searchpath = dirname(dirname(__FILE__)).'/data';
$outfile = "";

$imagefile = "munich.png";

/* WKT for plain latitude/longitude values in WGS84 */
$georefsystem  = "worldsystem={type=geographic wkt={"
    . "GEOGCS[\"WGS 84\","
    . "  DATUM[\"WGS_1984\", SPHEROID[\"WGS 84\", 6378137,298.257223563]],"
    . "  PRIMEM[\"Greenwich\", 0.0],"
    . "  UNIT[\"Degree\", 0.01745329251994328]]"
    . "}} linearunit=M areaunit=SQM angularunit=degree";

/* world coordinates of the image (in degrees) */
$worldpoints = array(
    48.145, /* latitude of top edge */
    11.565, /* longitude of left edge */
    11.59, /* longitude of right edge */
    48.13 /* latitude of bottom edge */
);

try {
    $p = new pdflib();

    $p->set_option("SearchPath={{" . $searchpath . "}}");

    /* This means we must check return values of load_font() etc. */
    $p->set_option("errorpolicy=return");

    /* Enable the following line if you experience crashes on OS X
     * (see PDFlib-in-PHP-HowTo.pdf for details):
     * $p->set_option("usehostfonts=false");
     */

    /* all strings are expected as utf8 */
    $p->set_option("stringformat=utf8");

    /* Start the document */
    if ($p->begin_document($outfile, "compatibility=1.7ext3") == 0) {
	throw new Exception("Error: " . $p->get_errmsg());
    }

    $p->set_info("Creator", "PDFlib starter sample");
    $p->set_info("Title", "starter_geospatial");
    /* Load the map $image */
    $image = $p->load_image("auto", $imagefile, "");
    if ($image == 0) {
	throw new Exception("Error: " . $p->get_errmsg());
    }

    /* Retrieve $image width and height */
    $mapwidth = $p->info_image($image, "imagewidth", "");
    $mapheight = $p->info_image($image, "imageheight", "");

    /* Generate georeference option list */
    $pageoptlist = "viewports={{ georeference={";
    $pageoptlist .= $georefsystem . " ";

    /* Use the four corners as reference points; (0,0)=lower left etc. */
    $pageoptlist .= " mappoints={0 0  1 0  1 1  0 1} ";

    /* 
     * The following can be used as a workaround for a problem with the
     * Avenza PDF Maps app on Android; otherwise the (almost) default
     * bounds values can be skipped:
     *
     * $pageoptlist .= "bounds={0.000001 0 0 1 1 1 1 0} ";
     */

    $pageoptlist .= "worldpoints={";

    /* lower left corner */
    $pageoptlist .= $worldpoints[3] . " " . $worldpoints[1] . " ";
    /* lower right corner */
    $pageoptlist .= $worldpoints[3] . " " . $worldpoints[2] . " ";
    /* upper right corner */
    $pageoptlist .= $worldpoints[0] . " " . $worldpoints[2] . " ";
    /* upper left corner */
    $pageoptlist .= $worldpoints[0] . " " . $worldpoints[1] . " ";

    $pageoptlist .= "} }";
    $pageoptlist .= " boundingbox={0 0 ";
    $pageoptlist .= $mapwidth . " " . $mapheight;
    $pageoptlist .= "} } }";

    /* Create a page with geospatial reference information. */
    $p->begin_page_ext($mapwidth, $mapheight, $pageoptlist);
    /* Place the map on the lower left corner of the page */
    $optlist = "adjustpage boxsize={";
    $optlist .= $mapwidth . " " . $mapheight;
    $optlist .= "}";
    $p->fit_image($image, 0, 0, $optlist);
    
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=starter_geospatial.pdf");
    print $buf;
}
catch (PDFlibException $e) {
    die("PDFlib exception occurred in starter_geospatial sample:\n" .
        "[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
        $e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}

$p = 0;
?>
