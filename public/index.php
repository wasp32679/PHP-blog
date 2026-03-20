<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Ryan\PhpBlog\Config\Database;

define('ROOT', dirname(__DIR__));

$db = Database::getConnexion();
