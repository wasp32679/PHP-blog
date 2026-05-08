<?php

require_once __DIR__ . "/../vendor/autoload.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Ryan\PhpBlog\config\Database;
use Ryan\PhpBlog\controllers\PostController;

define('ROOT', dirname(__DIR__));

$db = Database::getConnexion();

$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/posts/create' && $method === 'GET') {
    PostController::showCreateForm();
} elseif ($uri === '/posts/create' && $method === 'POST') {
    PostController::create();
} elseif (($uri === '/' || $uri === '/home') && $method === 'GET') {
    PostController::displayPosts();
} elseif ((preg_match('#^/posts/edit/(\d+)$#', $uri, $matches)) && $method === 'GET') {
    $id = (int) $matches[1];
    PostController::showEditForm($id);
} elseif ((preg_match('#^/posts/edit/(\d+)$#', $uri, $matches)) && $method === 'POST') {
    $id = (int) $matches[1];
    PostController::updatePost($id);
}
