<?php
namespace Cert;

$filename = 'test.xml';
$file = \fopen('test.xml','r+');
$contents = \fread($file, \filesize($filename));

echo unserialize($out_charset);
