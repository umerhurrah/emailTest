<?php

    $url = 'http://freehtmltopdf.com';
    $data = array(  'convert' => '', 
            'html' => '<html><head><title>My Title</title><link rel="stylesheet" type="text/css" href="relativepath.css"></head><body><h1>Web Page</h1><p>This is my content.</p></body></html>',
            'baseurl' => 'http://www.myhost.com');

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // set the pdf data as download content:
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="webpage.pdf"');
    echo($result);

?>