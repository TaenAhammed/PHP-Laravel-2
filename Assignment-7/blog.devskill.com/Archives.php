<?php

interface IArchives
{
    public function getArchivedPosts();
    public function setArchivedPosts();
    public function removeArchivedPosts();
}


class Archives implements IArchives
{
    public function __construct(IAdminLogin $adminLogIn, IPosts $posts)
    { }

    public function getArchivedPosts()
    { }

    public function setArchivedPost()
    { }

    public function removeArchivedPosts()
    { }
}
