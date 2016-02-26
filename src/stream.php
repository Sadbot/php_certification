<?php
namespace Cert;

class wrapper
{
    public $context;

    public function stream_open($path, $mode, $options, &$opened_path)
    {
        $url = parse_url($path);
        $text = file_get_contents($url['host'],$mode,$options,$opened_path);
        var_dump($text);
        return true;
    }
}

stream_wrapper_register('public', '\Cert\wrapper');

$fp = fopen('public://test.txt', 'r+');
fclose($fp);
