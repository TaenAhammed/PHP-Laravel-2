<?php

interface IContact
{
    public function getInputFirstName();
    public function getInputLastName();
    public function getInputEmail();
    public function getInputPhoneNo();
    public function getInputMsg();
    public function getIsHumanAns();

    public function saveContactInfo();
    public function getContactInfo();
}


class Contact implements IContact
{
    public function getInputFirstName()
    { }

    public function getInputLastName()
    { }

    public function getInputEmail()
    { }

    public function getInputPhoneNo()
    { }

    public function getInputMsg()
    { }

    public function getIsHumanAns()
    { }

    public function saveContactInfo()
    { }

    public function getContactInfo()
    { }
}
