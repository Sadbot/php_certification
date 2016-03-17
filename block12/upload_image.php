<?php
umask(0);

$url = 'http://img.yandex.net/i/www/logo.png';
$file = 'logo.png';

$ch = curl_init($url);
$fp = fopen($file, "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

header('Content-type: image/png');
