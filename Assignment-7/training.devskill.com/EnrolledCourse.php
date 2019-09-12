<?php

interface IEnrolledCourse
{
    public function enrolledCourses();
    public function enroll();
}


class EnrolledCourse implements IEnrolledCourse
{
    public function __construct(ICourse $course)
    { }

    public function enrolledCourses()
    { }

    public function enroll()
    { }
}
