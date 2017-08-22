<?php
#!/usr/bin/perl
# $Id: starter_pvf.php,v 1.9.2.2 2014/12/12 12:47:18 rp Exp $
# PDFlib Virtual File system (PVF):
# Create a PVF file which holds an image or PDF, and import the data from the
# PVF file
#
# This avoids disk access and is especially useful when the same image or PDF
# is imported multiply. For examples, images which sit in a database don't
# have to be written and re-read from disk, but can be passed to PDFlib
# directly in memory. A similar technique can be used for loading other data
# such as fonts, ICC profiles, etc.
#
# Required software: PDFlib/PDFlib+PDI/PPS 9
# Required data: image file

#
# Helper function to read the content of a file into a buffer
# avoids incompatible systemcalls

function read_file($fname)
{
    $fp = fopen($fname, "r");
    $data = fread ($fp, filesize($fname));
    fclose($fp);
    return $data;
} # read_file


# This is where the data files are. Adjust as necessary.
$searchpath = dirname(dirname(__FILE__)).'/data';

try {
    # create a new PDFlib object
    $p = new PDFlib();


    $p->set_option("SearchPath={{" . $searchpath . "}}");

    # This means we must check return values of load_font() etc.
    $p->set_option("errorpolicy=return");

    /* Enable the following line if you experience crashes on OS X
     * (see PDFlib-in-PHP-HowTo.pdf for details):
     * $p->set_option("usehostfonts=false");
     */

    # all strings are expected as utf8 
    $p->set_option("stringformat=utf8");

    # Set an output path according to the name of the topic
    if ($p->begin_document("", "") == 0) {
	die("Error: " .  $p->get_errmsg());
    }

    $p->set_info("Creator", "PDFlib Cookbook");
    $p->set_info("Title", "PDFlib Virtual File System");

    # We just read some image data from a file; to really benefit
    # from using PVF read the data from a Web site or a database instead

    $imagedata = read_file("../data/PDFlib-logo.tif");

    $p->create_pvf("/pvf/image", $imagedata, "");

    # Load the image from the PVF
    $image = $p->load_image("auto", "/pvf/image", "");
    if ($image == 0) {
	die("Error: " .  $p->get_errmsg());
    }

    # Fit the image on page 1
    $p->begin_page_ext(595, 842, "");

    $p->fit_image($image, 350, 750, "");

    $p->end_page_ext("");

    # Fit the image on page 2
    $p->begin_page_ext(595, 842, "");

    $p->fit_image($image, 350, 50, "");

    $p->end_page_ext("");

    # Delete the virtual file to free the allocated memory
    $p->delete_pvf("/pvf/image");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=starter_pvf.pdf");
    print $buf;

}
catch (PDFlibException $e) {
    die("PDFlib exception occurred in starter_pvf sample:\n" .
        "[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
        $e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}

$p = 0;

?>
