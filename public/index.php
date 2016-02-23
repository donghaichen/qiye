<?php
//设置时区
date_default_timezone_set('Asia/Shanghai');
//error_reporting(0);
//ini_set("display_errors", "On"); 
define('BASE_PATH',__DIR__);

define('APP',__DIR__.'/../app');

require __DIR__.'/../luser/autoload.php';


$app = require_once __DIR__.'/../luser/start.php';


$app->run();
