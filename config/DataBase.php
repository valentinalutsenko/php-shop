<?php

namespace config;

use PDO;

class DataBase
{
    public static function getConnection(): PDO
    {
        $paramsPath = __DIR__.'bd_params.php';
        $params = include $paramsPath;

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}
