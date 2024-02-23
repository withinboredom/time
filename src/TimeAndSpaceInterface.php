<?php

namespace Withinboredom\Time;

interface TimeAndSpaceInterface
{
    public function nanosecondsInMicroseconds(): float;

    public function ns2us(float|int $nanoseconds): float|int;
    public function us2ns(float|int $microseconds): float|int;

    public function microsecondsInMilliseconds(): float;

    public function us2ms(float|int $microseconds): float|int;
    public function ms2us(float|int $milliseconds): float|int;

    public function millisecondsInSeconds(): float;

    public function secondsInMinutes(): float;

    public function minutesInHours(): float;

    public function hoursInDays(): float;

    public function daysInWeeks(): float;
}
