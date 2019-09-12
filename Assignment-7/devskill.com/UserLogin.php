<?php

interface IUserLogin
{
    public function getInputEmail();
    public function getInputPassword();
    public function login();
}


class UserLogin implements IUserLogin
{
    public function __construct(IUser $user)
    { }

    public function getInputEmail()
    { }

    public function getInputPassword()
    { }

    public function login()
    { }
}
