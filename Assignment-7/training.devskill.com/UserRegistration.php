<?php

interface IUserRegistration
{
    public function getInputFullName();
    public function getInputUserName();
    public function getInputEmail();
    public function getInputMobileNo();
    public function getInputPassword();
    public function getInputIsAcceptTerms();
    public function register();
}


class UserRegistration implements IUserRegistration
{
    public function getInputFullName()
    { }

    public function getInputUserName()
    { }

    public function getInputEmail()
    { }

    public function getInputMobileNo()
    { }

    public function getInputPassword()
    { }

    public function getInputIsAcceptTerms()
    { }

    public function register()
    { }
}
