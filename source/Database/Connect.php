<?php
namespace Source\Database;

use PDO;
use PDOException;

class Connect {
    private const HOST = "localhost";
    private const DBNAME = "mvc";
    private const DBUSER = "root";
    private const DBPASS = "";
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];
    private static $instance;

    public static function getInstance(): PDO
    {
        if(empty(self::$instance)){
            try {
                self::$instance = new PDO(
                    "mysql:dbname=".self::DBNAME.";host=".self::HOST, self::DBUSER, self::DBPASS, self::OPTIONS);
            } catch (PDOException $e) {
                echo "ERROR: ".$e->getMessage();
                exit;
            }
        }
        return self::$instance;
    }

    final private function __construct() {}

    final private function __clone() {}
}
