<?php

interface IReplayComments
{
    public function addReplay();
    public function deleteReplay();
    public function updateReplay();
    public function getReplay();
}

class ReplayComments implements IReplayComments
{

    public function __construct(IAdminLogin $adminLogIn, IPosts $posts, IComments $comments)
    { }

    public function addReplay()
    { }

    public function deleteReplay()
    { }

    public function updateReplay()
    { }

    public function getReplay()
    { }
}
