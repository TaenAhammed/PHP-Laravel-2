<?php

interface ILogOut
{
    public function logout();
}


class LogOut implements ILogOut
{
    public function __constructor(IAdmin $admin)
    { }

    public function logout()
    { }
}
