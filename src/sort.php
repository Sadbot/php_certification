<?php
function len_sort($x, $y)
{
    if (strlen($x) == strlen($y)) {
        return 0;
    }
    return (strlen($x) > strlen($y)) ? -1 : 1;
}

function word_sort($x, $y)
{
    if (str_word_count($x) == str_word_count($y)) {
        return 0;
    }

    return (str_word_count($x) > str_word_count($y)) ? -1 : 1;
}

function cmp_sort($x, $y)
{
    return strcmp($x, $y);
}

$array = ['dsfgdfh qwf','dsfg swf e','yuokyuld  ewfwe e','xcbvx','brw efwf wef'];



usort($array,'word_sort');
echo "Word sort: "; var_dump($array);

usort($array,'len_sort');
echo "Len sort: "; var_dump($array);

usort($array,'cmp_sort');
echo "Cmp sort: "; var_dump($array);