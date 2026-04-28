<?php

namespace Ryan\PhpBlog\models;

class Post
{
    public int $id;
    public string $title;
    public string $image;
    public string $content;
    public string $created_at;
    public int $user_id;
}
