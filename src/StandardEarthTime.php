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

    #[\Override] public function ns2us(float|int $nanoseconds): float|int
    {
        return $nanoseconds / $this->nanosecondsInMicroseconds();
    }

    #[\Override] public function us2ns(float|int $microseconds): float|int
    {
        return $microseconds * $this->nanosecondsInMicroseconds();
    }

    #[\Override] public function us2ms(float|int $microseconds): float|int
    {
        return $microseconds / $this->microsecondsInMilliseconds();
    }

    #[\Override] public function ms2us(float|int $milliseconds): float|int
    {
        return $milliseconds * $this->microsecondsInMilliseconds();
    }

    #[\Override] public function ms2s(float|int $milliseconds): float|int
    {
        return $milliseconds / $this->millisecondsInSeconds();
    }

    #[\Override] public function s2ms(float|int $milliseconds): float|int
    {
        return $milliseconds * $this->millisecondsInSeconds();
    }

    #[\Override] public function s2min(float|int $seconds): float|int
    {
        return $seconds / $this->secondsInMinutes();
    }

    #[\Override] public function min2s(float|int $minutes): float|int
    {
        return $minutes * $this->secondsInMinutes();
    }

    #[\Override] public function min2h(float|int $minutes): float|int
    {
        return $minutes / $this->minutesInHours();
    }

    #[\Override] public function h2min(float|int $hours): float|int
    {
        return $hours * $this->minutesInHours();
    }

    #[\Override] public function h2d(float|int $hours): float|int
    {
        return $hours / $this->hoursInDays();
    }

    #[\Override] public function d2h(float|int $days): float|int
    {
        return $days * $this->hoursInDays();
    }

    #[\Override] public function d2w(float|int $days): float|int
    {
        return $days / $this->daysInWeeks();
    }

    #[\Override] public function w2d(float|int $weeks): float|int
    {
        return $weeks * $this->daysInWeeks();
    }
}
