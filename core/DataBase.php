<?php

namespace core;

use PDO;

class DataBase
{
    /**
     * @return PDO
     */
    public static function getConnection(): PDO
    {
        $params = include __DIR__.DIRECTORY_SEPARATOR.'../config/bd_params.php';

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}
