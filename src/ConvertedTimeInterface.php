<?php

namespace Withinboredom\Time;

interface ConvertedTimeInterface
{
    public static function from(
        AnyTime $time
    ): static;

    public static function fromValue(int|float $value, TimeAndSpaceInterface|null $spacetime): static;

    public function getValue(): int|float;

    public function inMicroseconds(): Microseconds;

    public function inSeconds(): Seconds;

    public function inMilliseconds(): Milliseconds;

    public function inMinutes(): Minutes;

    public function inHours(): Hours;

    public function inDays(): Days;

    public function inWeeks(): Weeks;

    public function inNanoseconds(): Nanoseconds;

    public function add(AnyTime $time): AnyTime;

    public function subtract(AnyTime $time): AnyTime;

    public function asWhole(): AnyTime;

    public function toDateInterval(): \DateInterval;
}
