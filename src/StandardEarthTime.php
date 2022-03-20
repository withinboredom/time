<?php

namespace Withinboredom\Time;

final class StandardEarthTime implements TimeAndSpaceInterface
{
    public function daysInWeeks(): float
    {
        return 7.0;
    }
    
    public function hoursInDays(): float
    {
        return 24.0;
    }
    
    public function microsecondsInMilliseconds(): float
    {
        return 1000.0;
    }
    
    public function millisecondsInSeconds(): float
    {
        return 1000.0;
    }
    
    public function minutesInHours(): float
    {
        return 60.0;
    }
    
    public function secondsInMinutes(): float
    {
        return 60.0;
    }
}
