<?php

require __DIR__ . DIRECTORY_SEPARATOR .'../vendor/autoload.php';

$routes = require_once __DIR__ . DIRECTORY_SEPARATOR . '../config/routes.php';
$uri = $_SERVER['REQUEST_URI'];

$routes[$uri]();

