<?php

interface ISubscriptions
{
    public function setSubscribedUser();
    public function deleteSubscribedUser();
    public function updateSubscribedUserEmail();
    public function getSubscribedUserEmail();
}


class Subscriptions implements ISubscriptions
{
    public function setSubscribedUser()
    { }

    public function deleteSubscribedUser()
    { }

    public function updateSubscribedUserEmail()
    { }

    public function getSubscribedUserEmail()
    { }
}
