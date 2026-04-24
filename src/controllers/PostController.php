<?php

namespace Ryan\PhpBlog\controllers;

use Ryan\PhpBlog\models\PostModel;

class PostController
{
    public static function showCreateForm(string $message = ''): void
    {
        require ROOT . '/src/views/posts/createpost.php';
    }

    public static function create(): void
    {
        $title   = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
        $file    = $_FILES['image'] ?? null;

        if (empty($title) || empty($content)) {
            $message = "Title and content are required.";
            self::showCreateForm($message);
        } else if (empty($file) || $file['size'] === 0) {
            $message = "Put a valid image.";
            self::showCreateForm($message);
        } else if ($file['size'] > 10 * 1024 * 1024) {
            $message = "The max file size is 10MB.";
            self::showCreateForm($message);
        } else {
            $allowedMimes = ['image/jpeg', 'image/png', 'image/gif'];
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $realMimeType = $finfo->file($file['tmp_name']);

            if (!in_array($realMimeType, $allowedMimes)) {
                $message = "Invalid file type.";
                self::showCreateForm($message);
                return;
            }

            $fileName  = uniqid('post_', true) . '_' . basename($file['name']);
            $dest      = ROOT . "/public/uploads/" . $fileName;
            move_uploaded_file($file['tmp_name'], $dest);
            $imagePath = "/uploads/" . $fileName;

            PostModel::createPost($title, $imagePath, $content);
            $message = "Post successfully created!";
            self::showCreateForm($message);
            exit;
        }
    }
}
