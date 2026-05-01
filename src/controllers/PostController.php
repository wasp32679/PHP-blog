<?php

namespace Ryan\PhpBlog\controllers;

use Ryan\PhpBlog\models\PostModel;

class PostController
{
    public static function showCreateForm(string $message = ''): void
    {
        require ROOT . '/src/views/posts/createpost.php';
    }

    private static function handleImage(array $file, string &$message): ?string
    {
        if ($file['size'] > 10 * 1024 * 1024) {
            $message = "The max file size is 10MB.";
            return null;
        } else {
            $allowedMimes = ['image/jpeg', 'image/png', 'image/gif'];
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $realMimeType = $finfo->file($file['tmp_name']);

            if (!in_array($realMimeType, $allowedMimes)) {
                $message = "Invalid file type.";
                return null;
            }

            $fileName  = uniqid('post_', true) . '_' . basename($file['name']);
            $dest      = ROOT . "/public/uploads/" . $fileName;
            move_uploaded_file($file['tmp_name'], $dest);
            $imagePath = "/uploads/" . $fileName;
            return $imagePath;
        }
    }

    public static function create(): void
    {
        $title   = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
        $content = html_entity_decode(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
        $file    = $_FILES['image'] ?? null;
        $message = '';

        if (empty($title) || empty($content)) {
            $message = "Title and content are required.";
            self::showCreateForm($message);
        } else if (empty($file) || $file['size'] === 0) {
            $message = "Put a valid image.";
            self::showCreateForm($message);
        }
        $imagePath = self::handleImage($file, $message);

        if ($imagePath === null) {
            self::showCreateForm($message);
        } else {

            PostModel::createPost($title, $imagePath, $content);
            $message = "Post successfully created!";
            self::showCreateForm($message);
            exit;
        }
    }


    public static function displayPosts(): void
    {
        $posts = PostModel::getAllPosts();
        require ROOT . '/src/views/home.php';
    }

    public static function showEditForm(int $id, string $message = ''): void
    {
        $post = PostModel::getPostById($id);
        require ROOT . '/src/views/posts/editpost.php';
    }

    public static function updatePost(int $id): void
    {
        $post = PostModel::getPostById($id);
        $title   = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS) ?? $post->title;
        $content = html_entity_decode(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS) ?? $post->content);
        $message = '';

        if (empty($title) || empty($content)) {
            $message = "Title and content are required.";
            self::showEditForm($id, $message);
        }

        $file    = $_FILES['image'] ?? null;
        $hasNewFile = $file && $file['size'] > 0;
        if ($hasNewFile) {
            $imagePath = self::handleImage($file, $message);
            if ($imagePath === null) {
                self::showEditForm($id, $message);
                return;
            }
        } else {
            $imagePath = $post->image;
        }

        PostModel::editPost($title, $imagePath, $content, $id);
        if ($title !== $post->title || $content !== $post->content || $hasNewFile) {
            $message = "Post successfully updated!";
        }
        self::showEditForm($id, $message);
    }
}
