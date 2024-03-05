<?php

namespace Withinboredom\Time;

use DateInterval;
use WeakMap;
use WeakReference;

final class AnyTime
{
    private static WeakMap $maps;

    private function __construct(private readonly float|int $value, protected readonly TimeAndSpaceInterface $spacetime) {}

    public function getValue(): int|float
    {
        return $this->value;
    }

    public static function fromValue(int $nanoseconds, TimeAndSpaceInterface $spacetime): self
    {
        $key = (string) $nanoseconds;

        self::$maps ??= new WeakMap();
        self::$maps[$spacetime] ??= [];
        $realValue = (self::$maps[$spacetime][$key] ?? null)?->get() ?? new self($nanoseconds, $spacetime);
        self::$maps[$spacetime][$key] = WeakReference::create($realValue);

        return $realValue;
    }

    public function inWeeks(): float
    {
        return $this->inDays() / $this->spacetime->weeksToDays(1);
    }

    public function inDays(): float
    {
        return $this->inHours() / $this->spacetime->daysToHours(1);
    }

    public function inHours(): float
    {
        return $this->inMinutes() / $this->spacetime->hoursToMinutes(1);
    }

    public function inMinutes(): float
    {
        return $this->inSeconds() / $this->spacetime->minutesToSeconds(1);
    }


    public function inSeconds(): float
    {
        return $this->inMilliseconds() / $this->spacetime->secondsToMilliseconds(1);
    }

    public function inMilliseconds(): float
    {
        return $this->inMicroseconds() / $this->spacetime->millisecondsToMicroseconds(1);
    }

    public function inMicroseconds(): float
    {
        return $this->value / $this->spacetime->microsecondsToNanoSeconds(1);
    }

    public function inNanoseconds(): int
    {
        return $this->value;
    }

    public function __clone(): void
    {
        throw new \LogicException('Please use from() to clone.');
    }

    public function __wakeup(): void
    {
        throw new \LogicException('Please use from() to deserialize');
    }

    public function __sleep(): array
    {
        throw new \LogicException('Time cannot be serialized.');
    }

    public function add(AnyTime $time): AnyTime
    {
        if ($time->spacetime !== $this->spacetime) {
            throw new \InvalidArgumentException('Space time must be compatible');
        }

        $result = $this->inNanoseconds() + $time->inNanoseconds();

        return self::fromValue($result, $time->spacetime);
    }

    public function subtract(AnyTime $time): AnyTime
    {
        if ($time->spacetime !== $this->spacetime) {
            throw new \InvalidArgumentException('Space time must be compatible');
        }

        $result = $this->inNanoseconds() - $time->inNanoseconds();

        return self::fromValue($result, $time->spacetime);
    }

    public function toDateInterval(): \DateInterval
    {
        $obj = $this;
        $weeks = (int) $obj->inWeeks();
        $totalDays = $days = (int) $obj->inDays();
        $days -= $this->spacetime->weeksToDays($weeks);
        $totalHours = $hours = (int) $obj->inHours();
        $hours -= $this->spacetime->daysToHours($totalDays);
        $totalMinutes = $minutes = (int) $obj->inMinutes();
        $minutes -= $this->spacetime->hoursToMinutes($totalHours);
        $seconds = (int) $obj->inSeconds();
        $seconds -= $this->spacetime->minutesToSeconds($totalMinutes);

        $string = [
            "P",
            $weeks ? ($weeks . "W") : '',
            $days ? ($days . "D") : '',
            "T",
            $hours ? ($hours . "H") : '',
            $minutes ? ($minutes . "M") : '',
            $seconds ? ($seconds . "S") : '',
        ];

        return new DateInterval(implode("", $string));
    }
}
