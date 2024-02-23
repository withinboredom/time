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

    public function ms2s(float|int $milliseconds): float|int;
    public function s2ms(float|int $milliseconds): float|int;

    public function secondsInMinutes(): float;

    public function s2min(float|int $seconds): float|int;
    public function min2s(float|int $minutes): float|int;

    public function minutesInHours(): float;

    public function min2h(float|int $minutes): float|int;
    public function h2min(float|int $hours): float|int;

    public function hoursInDays(): float;

    public function h2d(float|int $hours): float|int;
    public function d2h(float|int $days): float|int;

    public function daysInWeeks(): float;

    public function d2w(float|int $days): float|int;
    public function w2d(float|int $weeks): float|int;
}
