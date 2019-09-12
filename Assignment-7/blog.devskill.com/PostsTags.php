<?php

interface IPostsTags
{
    public function addTags();
    public function removeTags();
}


class PostsTags implements IPostsTags
{
    public function __construct(IAdminLogin $adminLogIn, IPosts $posts)
    { }

    public function addTags()
    { }

    public function removeTags()
    { }
}
