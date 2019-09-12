<?php

interface IReview
{
    public function setReview();
    public function getReview();
    public function getReviews();
}


class Review implements IReview
{
    public function __construct(IAvatar $avatar, IUser $user)
    { }

    public function setReview()
    { }

    public function getReview()
    { }

    public function getReviews()
    { }
}
