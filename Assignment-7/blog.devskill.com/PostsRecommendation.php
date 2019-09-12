<?php

interface IPostsRecommendations
{
    public function setRecommendedPosts();
    public function getRecommendedPosts();
}


class PostsRecommendations implements IPostsRecommendations
{
    public function __construct(IPosts $posts)
    { }

    public function setRecommendedPosts()
    { }

    public function getRecommendedPosts()
    { }
}
