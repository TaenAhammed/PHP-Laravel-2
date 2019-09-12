<?php

interface ICourses
{
    public function getCourses();
    public function getCourse();
    public function getCourseId();
    public function setCourse();
}


class Course implements ICourses
{
    public function __construct(ICourse $course)
    { }

    public function getCourses()
    { }

    public function getCourse()
    { }

    public function getCourseId()
    { }

    public function setCourse()
    { }
}
