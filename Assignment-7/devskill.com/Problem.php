<?php

interface IProblem
{
    public function getProblems();
    public function getProblem();
    public function setProblem();
}

class Problem implements IProblem
{
    public function __construct(IProblemDetails $problemDetails)
    { }

    public function getProblems()
    { }

    public function getProblem()
    { }

    public function setProblem()
    { }
}
