<?php

use core\App;

require_once dirname(__DIR__).'/config/init.php';
require_once ROOT.'/vendor/autoload.php';

var_dump($_GET['id']);
$router = new App();
$router->run();
