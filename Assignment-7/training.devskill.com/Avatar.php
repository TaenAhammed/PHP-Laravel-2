<?php
interface IAvatar
{
    public function getAvatar();
    public function setAvatar();
    public function updateAvatar();
    public function deleteAvatar();
}

class Avatar implements IAvatar
{
    public function __construct(IAdminLogin $adminLogIn)
    { }

    public function getAvatar()
    { }

    public function setAvatar()
    { }

    public function updateAvatar()
    { }

    public function deleteAvatar()
    { }
}
