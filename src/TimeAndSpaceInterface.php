<?php

namespace Withinboredom\Time;

interface TimeAndSpaceInterface
{
    public function nanosecondsInMicroseconds(): float;

    public function microsecondsInMilliseconds(): float;

    public function millisecondsInSeconds(): float;

    public function secondsInMinutes(): float;

    public function minutesInHours(): float;

    public function hoursInDays(): float;

    public function daysInWeeks(): float;
}
