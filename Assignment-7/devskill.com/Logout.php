<?php

interface ILogOut
{
    public function logout();
}


class LogOut implements ILogOut
{
    public function __constructor(IAdmin $admin, IUser $user)
    { }

    public function logout()
    { }
}
