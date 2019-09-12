<?php

interface IName
{
    public function setName();
    public function getName();
    public function updateName();
}


interface IEmail
{
    public function setEmail();
    public function getEmail();
    public function updateEmail();
}


interface IPassword
{
    public function setPassword();
    public function getPassword();
    public function updatePassword();
}


interface IAdmin extends IName, IEmail, IPassword
{ }


class Admin implements IAdmin
{

    public function __construct(IAdminLogin $adminLogIn)
    { }

    public function setName()
    { }

    public function getName()
    { }

    public function updateName()
    { }

    public function setEmail()
    { }

    public function getEmail()
    { }

    public function updateEmail()
    { }

    public function setPassword()
    { }

    public function getPassword()
    { }

    public function updatePassword()
    { }
}
