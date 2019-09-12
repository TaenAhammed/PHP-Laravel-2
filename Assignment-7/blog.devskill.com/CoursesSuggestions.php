<?php

interface ICoursesSuggestions
{
    public function setSuggestedCourses();
    public function getSuggestedCourses();
}


class CourseSuggestions implements ICoursesSuggestions
{
    public function __construct(IPosts $posts)
    { }

    public function setSuggestedCourses()
    { }

    public function getSuggestedCourses()
    { }
}
