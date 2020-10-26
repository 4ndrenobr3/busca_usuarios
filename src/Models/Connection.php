<?php
namespace SearchApp\Models;

class Connection
{
    private static $instance = null;

    private static $db_name = DB_NAME;
    private static $host = DB_HOST;
    private static $user = DB_USER;
    private static $password = DB_PASSWORD;

    private function __construct() {
    }

    public static function getInstance()
    {
        try {
            if(is_null(self::$instance)) {
                self::$instance = new \PDO("mysql:dbname=". self::$db_name . ";host=". self::$host .";", self::$user, self::$password);

                self::$instance->exec('SET NAMES UTF8');
            }

            return self::$instance;
        } catch (\PDOException $e){

            echo $e->getMessage();
            exit;
        }
    }
}
