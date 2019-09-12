<?php

interface ICourse
{
    public function setName();
    public function getName();

    public function setPrerequisites();
    public function getPrerequisites();

    public function setHighlights();
    public function getHighlights();
}


class Course implements ICourse
{
    public function __construct(ICourseInfo $info, ICourseSummary $summary, ICourseSyllabus $syllabus, IReview $review)
    { }

    public function setName()
    { }

    public function getName()
    { }

    public function setPrerequisites()
    { }

    public function getPrerequisites()
    { }

    public function setHighlights()
    { }

    public function getHighlights()
    { }
}
