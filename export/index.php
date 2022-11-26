<?php
require_once('vendor/autoload.php');

use Knp\Snappy\Pdf;

// $snappy = new Pdf('lib/wkhtmltopdf/bin/wkhtmltopdf');
$snappy = new Pdf('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');

$snappy->setOption('encoding', 'UTF-8');
$snappy->setOption('image-quality', 100);
$snappy->setOption('enable-local-file-access', true);

$snappy->setOption('title', $result['titre_document']);

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
