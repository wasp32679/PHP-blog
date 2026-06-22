<?php

session_start([
    'cookie_httponly' => true,
    'cookie_secure' => isset($_SERVER['HTTPS']),
    'cookie_samesite' => 'Lax',
]);

require_once __DIR__ . "/../vendor/autoload.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Ryan\PhpBlog\config\Database;
use Ryan\PhpBlog\controllers\PostController;
use Ryan\PhpBlog\controllers\UserController;
use Ryan\PhpBlog\helpers\Auth;

define('ROOT', dirname(__DIR__));

$db = Database::getConnexion();

$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    ['GET',  '#^/posts/create$#',      [PostController::class, 'showCreateForm'], true],
    ['POST', '#^/posts/create$#',      [PostController::class, 'create'],         true],
    ['GET',  '#^/$#',                  [PostController::class, 'displayPosts'],   false],
    ['GET',  '#^/home$#',              [PostController::class, 'displayPosts'],   false],
    ['GET',  '#^/posts/edit/(\d+)$#',  [PostController::class, 'showEditForm'],   true],
    ['POST', '#^/posts/edit/(\d+)$#',  [PostController::class, 'updatePost'],     true],
    ['GET',  '#^/posts/(\d+)$#',       [PostController::class, 'displayPostById'], false],
    ['GET',  '#^/register$#',          [UserController::class, 'showRegisterForm'], false],
    ['POST', '#^/register$#',          [UserController::class, 'createUser'],     false],
    ['GET',  '#^/login$#',             [UserController::class, 'showLoginForm'],  false],
    ['POST', '#^/login$#',             [UserController::class, 'login'],          false],
    ['GET',  '#^/logout$#',            [UserController::class, 'logout'],         true],
];

$matched = false;

foreach ($routes as $route) {
    if ((preg_match($route[1], $uri, $matches)) && $method === $route[0]) {
        $matched = true;
        if ($route[3] === true) {
            if (Auth::isAuthenticated() === false) {
                header("Location: /login");
                exit;
            }
        }

        if (isset($matches[1])) {
            $id = (int) $matches[1];
            call_user_func($route[2], $id);
        } else {
            call_user_func($route[2]);
        }

        break;
    }
}

if (!$matched) {
    require ROOT . '/src/views/err404.php';
}
