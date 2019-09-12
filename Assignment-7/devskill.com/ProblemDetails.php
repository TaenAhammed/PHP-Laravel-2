<?php

interface IProblemDetails
{
    public function setTitle();
    public function getTitle();
    public function setDescriptions();
    public function getDescriptions();
    public function setInput();
    public function getInput();
    public function setOutput();
    public function getOutput();
    public function getSampleInput();
    public function getSampleOutput();
}


class ProblemDetails implements IProblemDetails
{
    public function __construct(ITimeLimits $timeLimits, IProblemStatistics $problemStatistics)
    { }

    public function setTitle()
    { }

    public function getTitle()
    { }

    public function setDescriptions()
    { }

    public function getDescriptions()
    { }

    public function setInput()
    { }

    public function getInput()
    { }

    public function setOutput()
    { }

    public function getOutput()
    { }

    public function getSampleInput()
    { }

    public function getSampleOutput()
    { }
}
