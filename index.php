<?php

require __DIR__.'/vendor/autoload.php';

$app = 'app/application.php';

if (file_exists($app)) {
    require $app;
}
