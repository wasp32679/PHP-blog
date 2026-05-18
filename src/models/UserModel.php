<?php

namespace Ryan\PhpBlog\models;

use Ryan\PhpBlog\config\Database;
use PDO;

class UserModel
{
    public static function createUser(string $name, string $email, string $hash)
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hash]);
    }
}
