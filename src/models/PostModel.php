<?php

namespace Ryan\PhpBlog\models;

use Ryan\PhpBlog\config\Database;

class PostModel
{
    public static function createPost($title, $image, $content): void
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("insert into posts (title, image, content, user_id) values (?, ?, ?, ?)");
        $stmt->execute([$title, $image, $content, 1]);
    }
}
