<?php

interface IFeedback
{
    public function setFeedbackType();
    public function getFeedbackType();
    public function getFeedbackTypes();

    public function getDescription();
    public function setDescription();

    public function getScreenshot();
    public function setScreenshot();

    public function getEmail();
    public function setEmail();

    public function getPhoneNo();
    public function setPhoneNo();

    public function getUsername();
    public function setUsername();
}

class Feedback implements IFeedback
{
    public function setFeedbackType()
    { }

    public function getFeedbackType()
    { }

    public function getFeedbackTypes()
    { }

    public function getDescription()
    { }

    public function setDescription()
    { }

    public function getScreenshot()
    { }

    public function setScreenshot()
    { }

    public function getEmail()
    { }

    public function setEmail()
    { }

    public function getPhoneNo()
    { }

    public function setPhoneNo()
    { }

    public function getUsername()
    { }

    public function setUsername()
    { }
}
