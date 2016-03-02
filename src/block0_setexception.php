<?php

class example {
    public function __construct() {
        set_exception_handler(array('example', 'exception_handler'));
        throw new Exception('EXCEPTION!');
    }

    public static function exception_handler($exception) {
        print "Test catched exception: ". $exception->getMessage() ."\n";
    }
}

$example = new example();

echo "Not Executed\n";