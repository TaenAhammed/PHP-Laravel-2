<?php
require_once("Admin.php");
require_once("Emailer.php");

interface IForgotPassword
{
    public function getInputEmail();
}


class ForgotPassword implements IForgotPassword
{
    public function __construct(IAdmin $admin, IEmailer $emailer)
    { }

    public function getInputEmail()
    { }
}
