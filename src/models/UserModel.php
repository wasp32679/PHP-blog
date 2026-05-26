<?php

namespace Ryan\PhpBlog\models;

use Ryan\PhpBlog\config\Database;
use Ryan\PhpBlog\models\User;
use PDO;


class UserModel
{
    /**
     * @param string $name
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function createUser(string $name, string $email, string $hash): void
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("insert into users (name, email, password) values (?, ?, ?)");
        $stmt->execute([$name, $email, $hash]);
    }

    public static function findByEmail(string $email): ?User
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("select * from users where email = ?");
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch();
        return $user ?: null;
    }
}
