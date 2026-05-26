<?php

namespace Ryan\PhpBlog\controllers;

use PDOException;
use Ryan\PhpBlog\models\UserModel;

class UserController
{
    /**
     * @param array $errors
     * @param string $name
     * @param string $email
     * @return void
     */
    public static function showRegisterForm(array $errors = [], string $name = '', string $email = ''): void
    {
        require ROOT . '/src/views/auth/register.php';
    }

    public static function createUser(): void
    {
        $name     = trim($_POST['name'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
        $errors   = [];

        if (empty($name)) {
            $errors['name'] = "Name is required.";
        } elseif (strlen($name) > 30) {
            $errors['name'] = "Name cannot exceed 30 characters.";
        }

        if (empty($email)) {
            $errors['email'] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email is not valid.";
        }

        if (empty($password)) {
            $errors['password'] = "Password is required.";
        } elseif (!preg_match($pattern, $password)) {
            $errors['password'] = "Password must be at least 8 characters, contains an uppercase, a lowercase and a number.";
        } elseif (strlen($password) > 72) {
            $errors['password'] = "Password cannot exceed 72 characters.";
        }

        $confirm = $_POST['confirm-password'] ?? '';
        if ($password !== $confirm) {
            $errors['confirm-password'] = "Passwords do not match.";
        }

        if (!empty($errors)) {
            self::showRegisterForm($errors, $name, $email);
            return;
        }

        try {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            UserModel::createUser($name, $email, $hash);
            header("Location: /login");
            exit;
        } catch (PDOException $e) {
            if (str_contains($e->getMessage(), 'UNIQUE')) {
                $errors['email'] = "This email is already taken.";
            } else {
                $errors['general'] = "Server error, please try again later.";
            }
            self::showRegisterForm($errors, $name, $email);
        }
    }

    public static function showLoginForm(string $errors = ''): void
    {
        require ROOT . '/src/views/auth/login.php';
    }

    public static function login(): void
    {
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $user = UserModel::findByEmail($email);
        $errors   = '';

        if ($user === null || !password_verify($password, $user->password)) {
            $errors = "Invalid email or password.";
        }

        if (!empty($errors)) {
            self::showLoginForm($errors);
            return;
        }

        session_regenerate_id(true);
        $_SESSION["user"] = [
            'id' => $user->id,
            'username' => $user->name
        ];
        header("Location: /");
        exit;
    }

    public static function logout(): void
    {
        session_destroy();
        setcookie(session_name(), "", time() - 3600);
        header("Location: /");
        exit;
    }
}
