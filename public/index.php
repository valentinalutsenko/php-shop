<?php


use core\App;

require_once  dirname(__DIR__) . '/config/init.php';
require_once ROOT .'/vendor/autoload.php';



$app = new App();
$app->run();


