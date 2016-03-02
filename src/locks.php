<?php
namespace Cert;

const fname = 'test.txt';

$pid = getmypid();
$temp = fopen(fname, "c+");

if ($temp) {
    echo "{$pid}: I'm trying to access the file\n";
    while (!flock($temp, LOCK_EX)) {
    }

    echo "{$pid}: I'm writing to file\n";
    while (!feof($temp)) {
        $str = (int)fgets($temp);
    }

//    sleep(2);

    echo "{$pid}: I wrote to file\n";
    fprintf($temp, "\n%d", $str + 1);

    flock($temp, LOCK_UN);
    fclose($temp);
}