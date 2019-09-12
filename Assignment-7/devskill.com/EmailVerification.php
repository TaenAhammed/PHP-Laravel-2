<?php

interface IEmailVerification
{
    public function isEmailVerified();
}


class EmailVerification implements IEmailVerification
{
    public function __construct(IEmailer $emailer)
    { }

    public function isEmailVerified()
    { }
}
