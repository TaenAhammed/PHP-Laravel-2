<?php

interface IPosts
{
    public function addPost();
    public function getPosts();
    public function getPost($id);
    public function updatePost();
    public function deletePost();
    public function getPostId();
}


class Posts implements IPosts
{
    public function __construct(IAdminLogin $adminLogIn)
    { }

    public function addPost()
    { }

    public function getPosts()
    { }

    public function getPost($id)
    { }

    public function updatePost()
    { }

    public function deletePost()
    { }

    public function getPostId()
    { }
}
