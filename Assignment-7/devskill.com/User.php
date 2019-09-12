<?php

interface IUserInfoSet
{
    public function setFullName();
    public function setUserName();
    public function setEmail();
    public function setMobileNo();
    public function setPassword();
}


interface IUserInfoGet
{
    public function getFullName();
    public function getUserName();
    public function getEmail();
    public function getMobileNo();
    public function getPassword();
}


interface IUserInfoUpdate
{
    public function updateFullName();
    public function updateEmail();
    public function updateMobileNo();
    public function updatePassword();
}


interface IUser extends IUserInfoGet, IUserInfoSet, IUserInfoUpdate
{ }


class User implements IUser
{

    public function __construct(IAvatar $avatar)
    { }

    public function setFullName()
    { }

    public function setUserName()
    { }

    public function setEmail()
    { }

    public function setMobileNo()
    { }

    public function setPassword()
    { }

    public function getFullName()
    { }

    public function getUserName()
    { }

    public function getEmail()
    { }

    public function getMobileNo()
    { }

    public function getPassword()
    { }

    public function updateFullName()
    { }

    public function updateEmail()
    { }

    public function updateMobileNo()
    { }

    public function updatePassword()
    { }
}
