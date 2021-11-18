<?php
include './vendor/autoload.php';
use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
$pdf = new Pdf;
$pdf->addCover('<html>cover<html>');
$pdf->addToc();
$pdf->addPage('<html>...</html>');
$pdf->addPage('http://ujsstudio.com');

// Save the PDF
if (!$pdf->saveAs('report.pdf')) {
    $error = $pdf->getError();
    // ... handle error here
}

// ... or send to client for inline display
if (!$pdf->send()) {
    $error = $pdf->getError();
    // ... handle error here
}

// ... or send to client as file download
if (!$pdf->send('report.pdf')) {
    $error = $pdf->getError();
    // ... handle error here
}

// ... or you can get the raw pdf as a string
$content = $pdf->toString();