<?php

namespace Ryan\PhpBlog\helpers;

class Auth
{
    public static function isAuthenticated(): bool
    {
        return isset($_SESSION['user']);
    }

    public static function user(): ?array
    {
        return $_SESSION['user'] ?? null;
    }
}
