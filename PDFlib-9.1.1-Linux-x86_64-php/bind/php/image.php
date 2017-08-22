<?php
/* $Id: image.php,v 1.18.2.1 2013/07/05 11:56:16 rp Exp $
 *
 * PDFlib client: image example in PHP
 */

/* This is where font/image/PDF input files live. Adjust as necessary. */ 
$searchpath = dirname(dirname(__FILE__)).'/data';

try {
    $p = new PDFlib();

    # This means we must check return values of load_font() etc.
    $p->set_option("errorpolicy=return");

    /* all strings are expected as utf8 */
    $p->set_option("stringformat=utf8");

    $p->set_option("SearchPath={{" . $searchpath . "}}");

    /*  open new PDF file; insert a file name to create the PDF on disk */
    if ($p->begin_document("", "") == 0) {
	die("Error: " . $p->get_errmsg());
    }

    $p->set_info("Creator", "image.php");
    $p->set_info("Author", "Rainer Schaaf");
    $p->set_info("Title", "image sample (PHP)");

    $imagefile = "nesrin.jpg";

    $image = $p->load_image("auto", $imagefile, "");
    if (!$image) {
	die("Error: " . $p->get_errmsg());
    }

    /* dummy page size, will be adjusted by $p->fit_image() */
    $p->begin_page_ext(10, 10, "");
    $p->fit_image($image, 0, 0, "adjustpage");
    $p->close_image($image);
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=image.pdf");
    print $buf;

}
catch (PDFlibException $e) {
    die("PDFlib exception occurred in image sample:\n" .
	"[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
	$e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}

$p = 0;
?>
