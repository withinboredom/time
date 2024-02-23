<?php

namespace Withinboredom\Time;

final class StandardEarthTime implements TimeAndSpaceInterface
{
    #[\Override] public function daysInWeeks(): float
    {
        return 7.0;
    }

    #[\Override] public function hoursInDays(): float
    {
        return 24.0;
    }

    #[\Override] public function microsecondsInMilliseconds(): float
    {
        return 1000.0;
    }

    #[\Override] public function millisecondsInSeconds(): float
    {
        return 1000.0;
    }

    #[\Override] public function minutesInHours(): float
    {
        return 60.0;
    }

    #[\Override] public function secondsInMinutes(): float
    {
        return 60.0;
    }

    #[\Override] public function nanosecondsInMicroseconds(): float
    {
        return 1000.0;
    }
}
