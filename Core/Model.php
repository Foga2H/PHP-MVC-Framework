<?php

namespace Core;

use App\Config;

/**
 * Base Model
 * @package Core
 */
abstract class Model
{
    protected static function getDatabase()
    {
        static $_db = null;

        if($_db === null) {
            try {
                $_db = new \PDO("mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=utf8",
                    Config::DB_USER, Config::DB_PASSWORD);

                // Throw an Exception when an error occurs
                $_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $_db;
    }
}