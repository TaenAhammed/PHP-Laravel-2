<?php

interface IRanking
{
    public function getRank();
    public function getUsername();
    public function getScore();
}


class Ranking implements IRanking
{
    public function getRank()
    { }

    public function getUsername()
    { }

    public function getScore()
    { }
}
