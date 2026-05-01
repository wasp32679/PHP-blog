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

    /**
     * @param int $id
     * @return Post
     */
    public static function getPostById(int $id): Post
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("select * from posts where id = ?");
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);
        return $stmt->fetch();
    }

    /**
     * @param string $title
     * @param string $image
     * @param string $content
     * @param int    $id
     * @return void
     */
    public static function editPost($title, $image, $content, $id): void
    {
        $pdo = Database::getConnexion();
        $stmt = $pdo->prepare("update posts set title=?, image=?, content=? where id=?");
        $stmt->execute([$title, $image, $content, $id]);
    }
}
