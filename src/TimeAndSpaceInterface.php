<?php

namespace Withinboredom\Time;

interface TimeAndSpaceInterface
{
    public function microsecondsToNanoSeconds(float $microseconds): float;
    public function fromNanoSeconds(int $nanoseconds): AnyTime;
    public function fromMicroseconds(float $microseconds): AnyTime;

    public function millisecondsToMicroseconds(float $microseconds): float;
    public function fromMilliseconds(float $milliseconds): AnyTime;

    public function fromSeconds(float $seconds): AnyTime;
    public function secondsToMilliseconds(float $seconds): float;

    public function fromMinutes(float $minutes): AnyTime;
    public function minutesToSeconds(float $minutes): float;

    public function fromHours(float $hours): AnyTime;
    public function hoursToMinutes(float $hours): float;

    public function fromDays(float $days): AnyTime;
    public function daysToHours(float $days): float;

    public function fromWeeks(float $weeks): AnyTime;
    public function weeksToDays(float $weeks): float;
}
