<?php

use lesson9\App\JsonFormat;
use lesson9\App\XmlFormat;

require __DIR__ . '/../../vendor/autoload.php';

$data = [
    'name' => 'Balzhan',
    'age' => 22,
    'skills' => ['PHP', 'XML', 'JSON']
];

$json = new JsonFormat();
echo "JSON Encode:\n";
echo $json->encode($data) . "\n";
echo "JSON Decode:\n";
print_r($json->decode($json->encode($data)));

$xml = new XmlFormat();
echo "\nXML Encode:\n";
$encodedXml = $xml->encode($data);
echo $encodedXml . "\n";
echo "XML Decode:\n";
print_r($xml->decode($encodedXml));
