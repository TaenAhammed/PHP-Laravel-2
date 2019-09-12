<?php

interface IEmailer
{
    public function sendPasswordResetLink();
    public function sendFollowUpComments();
    public function sendNewPostLink();
}


class Emailer implements IEmailer
{
    public function __construct(IAdmin $admin, ISubscriptions $subscriptions)
    { }

    public function sendPasswordResetLink()
    { }

    public function sendFollowUpComments()
    { }

    public function sendNewPostLink()
    { }
}
