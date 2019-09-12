<?php

interface ISearchProblem
{
    public function searchProblem();
}


class SearchProblem implements ISearchProblem
{
    public function __construct(IProblem $problem)
    { }

    public function searchProblem()
    { }
}
