<?php

interface IUserRegistration
{
    public function getInputFullName();
    public function getInputUserName();
    public function getInputEmail();
    public function getInputMobileNo();
    public function getInstituteName();
    public function getSkills();
    public function getWorkingInstituteName();
    public function getExperience();
    public function getInputPassword();
    public function getInputConfirmPassword();
    public function getInputIsAcceptTerms();
    public function register();
}


class UserRegistration implements IUserRegistration
{
    public function __construct(IEmailer $emailer)
    { }

    public function getInputFullName()
    { }

    public function getInputUserName()
    { }

    public function getInputEmail()
    { }

    public function getInputMobileNo()
    { }

    public function getInstituteName()
    { }

    public function getSkills()
    { }

    public function getWorkingInstituteName()
    { }

    public function getYearsOfExperience()
    { }


    public function getInputPassword()
    { }

    public function getInputConfirmPassword()
    { }

    public function getInputIsAcceptTerms()
    { }

    public function register()
    { }
}
