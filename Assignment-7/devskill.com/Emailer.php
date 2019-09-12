<?php

interface IEmailer
{
    public function sendPasswordResetLink();
    public function sendNewContestInfo();
    public function sendEmailVerificationLink();
    public function sendContestResultLink();
}


class Emailer implements IEmailer
{
    public function __construct(IAdmin $admin, IUser $user, ISubscriptions $subscriptions, IContact $contact)
    { }

    public function sendPasswordResetLink()
    { }

    public function sendNewContestInfo()
    { }

    public function sendEmailVerificationLink()
    { }

    public function sendContestResultLink()
    { }
}
