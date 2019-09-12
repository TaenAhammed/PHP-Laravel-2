<?php

interface IInstructor
{
    public function setName();
    public function getName();

    public function setTitle();
    public function getTitle();
}

class Instructor implements IInstructor
{
    public function __construct(IInstructorSocialLinks $social)
    { }

    public function setName()
    { }

    public function getName()
    { }

    public function setTitle()
    { }

    public function getTitle()
    { }
}
