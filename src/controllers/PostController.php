<?php

namespace Ryan\PhpBlog\controllers;

use Ryan\PhpBlog\models\PostModel;

class PostController
{
    public static function showCreateForm(array $errors = []): void
    {
        require ROOT . '/src/views/posts/createpost.php';
    }

    private static function handleImage(array $file, array &$errors): ?string
    {
        if ($file['size'] > 10 * 1024 * 1024) {
            $errors['file'] = "The max file size is 10MB.";
            return null;
        } else {
            $allowedMimes = ['image/jpeg', 'image/png', 'image/gif'];
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $realMimeType = $finfo->file($file['tmp_name']);

            if (!in_array($realMimeType, $allowedMimes)) {
                $errors['file'] = "Invalid file type.";
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
        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $file    = $_FILES['image'] ?? null;
        $errors = [];

        if (empty($title) || empty($content)) {
            $errors['text'] = "Title and content are required.";
        }

        if (empty($file) || $file['size'] === 0) {
            $errors['file'] = "Put a valid image.";
        }

        if (!empty($errors)) {
            self::showCreateForm($errors);
            return;
        }

        $imagePath = self::handleImage($file, $errors);

        if ($imagePath === null) {
            self::showCreateForm($errors);
            return;
        }

        $postId = PostModel::createPost($title, $imagePath, $content);
        header("Location: /posts/$postId");
        exit;
    }


    public static function displayPosts(): void
    {
        $posts = PostModel::getAllPosts();
        require ROOT . '/src/views/home.php';
    }

    public static function displayPostById(int $id): void
    {
        $post = PostModel::getPostById($id);
        if ($post === null) {
            require ROOT . '/src/views/err404.php';
            exit;
        }
        require ROOT . '/src/views/posts/detailpost.php';
    }

    public static function showEditForm(int $id, array $errors = []): void
    {
        $post = PostModel::getPostById($id);
        if ($post === null) {
            require ROOT . '/src/views/err404.php';
            exit;
        }
        require ROOT . '/src/views/posts/editpost.php';
    }

    public static function updatePost(int $id): void
    {
        $post = PostModel::getPostById($id);
        if ($post === null) {
            require ROOT . '/src/views/err404.php';
            exit;
        }
        $title = trim($_POST['title'] ?? $post->title);
        $content = trim($_POST['content'] ?? $post->content);
        $errors = [];

        if (empty($title) || empty($content)) {
            $errors['text'] = "Title and content are required.";
        }

        if (!empty($errors)) {
            self::showEditForm($id, $errors);
            return;
        }

        $file    = $_FILES['image'] ?? null;
        $hasNewFile = $file && $file['size'] > 0;
        if ($hasNewFile) {
            $imagePath = self::handleImage($file, $errors);
            if ($imagePath === null) {
                self::showEditForm($id, $errors);
                return;
            }
        } else {
            $imagePath = $post->image;
        }

        PostModel::editPost($title, $imagePath, $content, $id);
        // for future possible confirmation msg
        //        if ($title !== $post->title || $content !== $post->content || $hasNewFile) {
        //          $message = "Post successfully updated!";
        //    }
        header("Location: /posts/$id");
        exit;
    }
}
