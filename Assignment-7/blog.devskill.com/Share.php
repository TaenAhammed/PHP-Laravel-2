<?php

interface IShare
{
    public function getShareablePostLink();
}


interface IShareWithFB
{
    public function shareWithFB();
}


interface IShareWithTwitter
{
    public function shareWithTwitter();
}


interface IShareWithLinkedIn
{
    public function shareWithLinkedIn();
}


class Share implements IShare
{
    public function getShareablePostLink()
    { }
}


class ShareWithFB implements IShareWithFB
{
    public function __construct(IShare $share)
    { }

    public function shareWithFB()
    { }
}

class ShareWithTwitter  implements IShareWithTwitter
{
    public function __construct(IShare $share)
    { }

    public function shareWithTwitter()
    { }
}


class ShareWithLinkedIn implements IShareWithLinkedIn
{
    public function __construct(IShare $share)
    { }

    public function shareWithLinkedIn()
    { }
}
