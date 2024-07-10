<?php

namespace Withinboredom\Time;

use WeakReference;

final class Time
{
    private static array $map = [];

    private static function getValue(int $nanoseconds): Time
    {
        // Attempt to get the value from the array, and if it exists, get the
        // value from the WeakReference, otherwise, create a new one
        $realValue = (self::$map[$nanoseconds] ?? null)?->get() ?? new self($nanoseconds);

        // Store the value in the array, even if another reference exists
        self::$map[$nanoseconds] = WeakReference::create($realValue);

        return $realValue;
    }

    public function __destruct()
    {
        // The values no longer exist, and we can delete the value from the array
        unset(self::$map[$this->nanoseconds]);
    }

    private function __construct(private readonly int $nanoseconds)
    {
        if($this->nanoseconds < 0) {
            throw new \InvalidArgumentException('Time cannot be negative');
        }
    }

    public static function from(TimeUnit $unit, float $value): Time
    {
        return self::getValue($unit->value * $value);
    }

    public function as(TimeUnit $unit): float
    {
        return $this->nanoseconds / $unit->value;
    }

    public function add(Time $time): Time
    {
        return self::getValue($this->nanoseconds + $time->nanoseconds);
    }

    public function subtract(Time $time): Time
    {
        return self::getValue(abs($this->nanoseconds - $time->nanoseconds));
    }

    public function multiply(float $value): Time
    {
        return self::getValue($this->nanoseconds * $value);
    }

    public function divide(float $value): Time
    {
        return self::getValue($this->nanoseconds / $value);
    }

    private function components(): array
    {
        $weeks = (int) $this->as(TimeUnit::Weeks);
        $days = (int) $this->as(TimeUnit::Days) - $weeks * 7;
        $hours = (int) $this->as(TimeUnit::Hours) - $weeks * 7 * 24 - $days * 24;
        $minutes = (int) $this->as(TimeUnit::Minutes) - $weeks * 7 * 24 * 60 - $days * 24 * 60 - $hours * 60;
        $seconds = (int) $this->as(TimeUnit::Seconds) - $weeks * 7 * 24 * 60 * 60 - $days * 24 * 60 * 60 - $hours * 60 * 60 - $minutes * 60;

        return [$weeks, $days, $hours, $minutes, $seconds];
    }

    public function toDateInterval(): \DateInterval
    {
        [$weeks, $days, $hours, $minutes, $seconds] = $this->components();
        return new \DateInterval("P{$weeks}W{$days}DT{$hours}H{$minutes}M{$seconds}S");
    }

    public function __toString(): string
    {
        $components = $this->components();
        $components = [
            $components > 0 ? "$components[0] weeks" : null,
            $components > 0 ? "$components[1] days" : null,
            $components > 0 ? "$components[2] hours" : null,
            $components > 0 ? "$components[3] minutes" : null,
            $components > 0 ? "$components[4] seconds" : null,
        ];

        return implode(', ', array_filter($components));
    }

    public function __clone(): void
    {
        throw new \LogicException('Cannot clone a Time object');
    }

    public function __serialize(): array
    {
        throw new \LogicException('Cannot serialize a Time object');
    }
}
