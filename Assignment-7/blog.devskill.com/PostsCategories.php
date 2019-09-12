<?php

interface IPostsCategories
{
    public function addCategories();
    public function removeCategories();
}


class PostsCategories implements IPostsCategories
{
    public function __construct(IAdminLogin $adminLogIn, IPosts $posts)
    { }

    public function addCategories()
    { }

    public function removeCategories()
    { }
}
