<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/vendor/autoload.php');
// require_once($_SERVER['DOCUMENT_ROOT'] . '/ged-pdf/vendor/autoload.php');

use Knp\Snappy\Pdf;

// $snappy = new Pdf('lib/wkhtmltopdf/bin/wkhtmltopdf');
$snappy = new Pdf(__ROOT__.'/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
// $snappy = new Pdf($_SERVER['DOCUMENT_ROOT'] . '/ged-pdf/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');

$snappy->setOption('encoding', 'UTF-8');
$snappy->setOption('image-quality', 100);
$snappy->setOption('enable-local-file-access', true);

$snappy->setOption('title', "Document");

// html content
$htmlTemplate = <<<HTML
    <h1>Hello</h2>
HTML;


// $snappy->setOption('margin-top', '25mm');
// $snappy->setOption('margin-right', '15mm');
// $snappy->setOption('margin-bottom', '25mm');
// $snappy->setOption('margin-left', '15mm');

// $snappy->setOption('footer-font-size', 10);

// $snappy->setOption('footer-html', 'footer.html');
// $snappy->setOption('header-html', 'header.html');

// echo $htmlTemplate;
// die;

header('Content-Type: application/pdf');
echo $snappy->getOutputFromHtml($htmlTemplate);
