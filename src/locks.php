<?php
namespace Cert;

const fname = 'test.txt';

function addTextToNotLocked()
{
    if (file_exists(fname)) {
        $file = fopen(fname, 'w+');
        while ($file && flock($file, LOCK_EX)) {
            $text = file_get_contents(fname);
            echo 'write function 1 to txt file ', $text;
            flock($file, LOCK_UN);
        }
    }
}

addTextToNotLocked();
