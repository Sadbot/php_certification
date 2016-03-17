<?php

$xml = simplexml_load_file('php_xml_example.xml');

$item = $xml->Items->Item[1];

echo "Original:\n";
echo $item->asXML(), "\n\n";

$item->Quantity = 0;
unset($item->ShipDate);
$item['PartNumber'] = 'R2-D2';
$item->addChild('Comment', 'Comment')->addAttribute('Type', 'fake');
$item->USPrice->addChild('Value', '$')->addAttribute('NamedAs', 'US Dollars');

echo "Edited: \n";
echo $item->asXML(), "\n";