<?php

interface IAdminLogin
{
    public function getInputEmail();
    public function getInputPassword();
    public function login();
}


class AdminLogin implements IAdminLogin
{
    public function __construct(IAdmin $admin)
    { }

    public function getInputEmail()
    { }

    public function getInputPassword()
    { }

    public function login()
    { }
}
