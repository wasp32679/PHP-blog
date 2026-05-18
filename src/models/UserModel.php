<?php

namespace Ryan\PhpBlog\models;

use Ryan\PhpBlog\config\Database;

class UserModel
{
    /**
     * @param string $name
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function createUser(string $name, string $email, string $hash)
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("insert into users (name, email, password) values (?, ?, ?)");
        $stmt->execute([$name, $email, $hash]);
    }
}
