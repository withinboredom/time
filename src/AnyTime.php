<?php

namespace Withinboredom\Time;

use DateInterval;

abstract class AnyTime implements ConvertedTimeInterface
{
    private static array $maps;

    private static TimeAndSpaceInterface $earth;

    private function __construct(private readonly float|int $value, protected readonly TimeAndSpaceInterface $spacetime)
    {
    }

    public function getValue(): int|float
    {
        return $this->value;
    }

    public function inDays(): Days
    {
        return Days::fromValue($this->toDays());
    }

    public static function fromValue(float|int $value, TimeAndSpaceInterface|null $spacetime = null): static
    {
        self::$earth ??= new StandardEarthTime();
        $spacetime ??= self::$earth;

        self::$maps ??= [];
        $map = self::$maps[static::class] ??= new \WeakMap();
        $map[$spacetime] ??= [];
        $realValue = ($map[$spacetime][$value] ?? null)?->get() ?? new static($value, $spacetime);
        $map[$spacetime][$value] = \WeakReference::create($realValue);

        return $realValue;
    }

    abstract protected function toDays(): float|int;

    public function inHours(): Hours
    {
        return Hours::fromValue($this->toHours());
    }

    abstract protected function toHours(): float|int;

    public function inMilliseconds(): Milliseconds
    {
        return Milliseconds::fromValue($this->toMilliseconds());
    }

    abstract protected function toMilliseconds(): float|int;

    public function inMinutes(): Minutes
    {
        return Minutes::fromValue($this->toMilliseconds());
    }

    public function inWeeks(): Weeks
    {
        return Weeks::fromValue($this->toWeeks());
    }

    abstract protected function toWeeks(): float|int;

    public function inSeconds(): Seconds
    {
        return Seconds::fromValue($this->toSeconds());
    }

    protected function toSeconds(): float|int { return 0; }

    public function inMicroseconds(): Microseconds
    {
        return Microseconds::fromValue($this->toMicroseconds());
    }

    abstract protected function toMicroseconds(): float|int;

    public function inNanoseconds(): Nanoseconds
    {
        return Nanoseconds::fromValue($this->toNanoseconds());
    }

    abstract protected function toNanoseconds(): float|int;

    public function add(AnyTime $time): AnyTime
    {
        if ($time->spacetime !== $this->spacetime) {
            throw new \InvalidArgumentException('Space time must be compatible');
        }

        $result = $this->toNanoseconds() + $time->toNanoseconds();

        return static::from(Nanoseconds::fromValue($result));
    }

    public function subtract(AnyTime $time): AnyTime
    {
        if ($time->spacetime !== $this->spacetime) {
            throw new \InvalidArgumentException('Space time must be compatible');
        }

        $result = $this->toNanoseconds() - $time->toNanoseconds();
        return static::from(Nanoseconds::fromValue($result));
    }

    public function asWhole(): AnyTime
    {
        return static::fromValue((int)$this->value, $this->spacetime);
    }

    public function toDateInterval(): \DateInterval
    {
        $obj = clone $this;
        $weeks = (int)$obj->toWeeks();
        $days = (int)$obj->toDays();
        $days -= $weeks * $this->spacetime->daysInWeeks();
        $hours = (int)$obj->toHours();
        $hours -= $days * $this->spacetime->hoursInDays();
        $minutes = (int)$obj->toMinutes();
        $minutes -= $hours * $this->spacetime->minutesInHours();
        $seconds = (int)$obj->toSeconds();
        $seconds -= $minutes * $this->spacetime->secondsInMinutes();

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

    abstract protected function toMinutes(): float|int;
}
