<?php

interface ISubscriptions
{
    public function setSubscribedUser();
    public function deleteSubscribedUser();
    public function getSubscribedUsersInfo();
    public function getSubscribedUserInfo();
    public function updateSubscribedUserInfo();
    public function getSubscribedUserEmail();
}


class Subscriptions implements ISubscriptions
{
    public function setSubscribedUser()
    { }

    public function deleteSubscribedUser()
    { }

    public function getSubscribedUserInfo()
    { }

    public function getSubscribedUsersInfo()
    { }

    public function updateSubscribedUserInfo()
    { }

    public function getSubscribedUserEmail()
    { }
}
