<?php

namespace Ryan\PhpBlog\models;

class Post
{
    public readonly int $id;
    public readonly string $title;
    public readonly string $image;
    public readonly string $content;
    public readonly string $created_at;
    public readonly int $user_id;
}
