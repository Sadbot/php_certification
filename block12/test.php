<?php

phpinfo();
ob_start("ob_gzhandler");


var_dump(headers_list());

var_dump(ob_list_handlers());