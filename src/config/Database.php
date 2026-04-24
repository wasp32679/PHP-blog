<?php

namespace Ryan\PhpBlog\config;

use PDO;

class Database
{
    private static ?PDO $instance = null;

    private function __construct() {}

    public static function getConnexion(): PDO
    {
        if (self::$instance === null) {
            $dbpath = ROOT . "/src/database/database.db";

            try {
                $dsn = "sqlite:" . $dbpath;
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];

                self::$instance = new PDO($dsn, null, null, $options);
            } catch (\PDOException $e) {
                throw ("Connexion error : " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
