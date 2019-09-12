<?php

interface IComments
{
    public function addComment();
    public function deleteComment();
    public function updateComment();
    public function readComment();
    public function getCommentId();
}


class Comments implements IComments
{
    public function __construct(IAdminLogin $adminLogIn, IPosts $posts)
    { }

    public function addComment()
    { }

    public function deleteComment()
    { }

    public function updateComment()
    { }

    public function readComment()
    { }

    public function getCommentId()
    { }
}
