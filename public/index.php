<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Ryan\PhpBlog\Config\Database;

// dirname(__DIR__) permet de remonter d'un cran
define('ROOT', dirname(__DIR__));

$db = Database::getConnexion();
var_dump($db);
