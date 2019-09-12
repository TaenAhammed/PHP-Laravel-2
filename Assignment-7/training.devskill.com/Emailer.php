<?php

interface IEmailer
{
    public function sendPasswordResetLink();
    public function sendNewCourseInfo();
    public function sendEmailVerificationLink();
    public function sendQuery();
}


class Emailer implements IEmailer
{
    public function __construct(IAdmin $admin, IUser $user, ISubscriptions $subscriptions, IContact $contact)
    { }

    public function sendPasswordResetLink()
    { }

    public function sendNewCourseInfo()
    { }

    public function sendEmailVerificationLink()
    { }

    public function sendQuery()
    { }
}
