<?php

namespace Ryan\PhpBlog\models;

use Ryan\PhpBlog\config\Database;
use Ryan\PhpBlog\models\Post;
use PDO;

class PostModel
{
    /**
     * @param string $title
     * @param string $image
     * @param string $content
     * @return void
     */
    public static function createPost($title, $image, $content): void
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("insert into posts (title, image, content, user_id) values (?, ?, ?, ?)");
        $stmt->execute([$title, $image, $content, 1]);
    }

    /**
     * @return Post[] 
     */
    public static function getAllPosts(): array
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->query("select * from posts order by created_at desc");
        return $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
    }
}
