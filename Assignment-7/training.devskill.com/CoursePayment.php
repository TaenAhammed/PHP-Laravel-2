<?php

interface ICoursePayment
{
    public function pay();
    public function isPaymentComplete();
}


class CoursePayment implements ICoursePayment
{
    public function pay()
    { }
    public function isPaymentComplete()
    { }
}
