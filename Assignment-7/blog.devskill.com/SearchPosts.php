<?php

interface ISearchPosts
{
    public function getInputString();
    public function search();
}


class SearchPosts implements ISearchPosts
{
    public function getInputString()
    { }

    public function search()
    { }
}
