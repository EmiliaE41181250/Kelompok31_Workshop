<?php

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Spipu\\Html2Pdf\\' => array($vendorDir . '/spipu/html2pdf/src'),
    'Psr\\SimpleCache\\' => array($vendorDir . '/psr/simple-cache/src'),
    'PhpOffice\\PhpSpreadsheet\\' => array($vendorDir . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet'),
);
