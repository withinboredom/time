<?php

namespace Withinboredom\Time;

final class Weeks extends AnyTime
{
    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toWeeks(), $time->spacetime);
    }

    #[\Override] protected function toWeeks(): float|int
    {
        return $this->getValue();
    }

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }

    #[\Override] protected function toMilliseconds(): float|int
    {
        return $this->spacetime->s2ms($this->toSeconds());
    }

    #[\Override] protected function toSeconds(): float|int
    {
        return $this->spacetime->min2s($this->toMinutes());
    }

    #[\Override] protected function toDays(): float|int
    {
        return $this->spacetime->w2d($this->toWeeks());
    }

    #[\Override] protected function toHours(): float|int
    {
        return $this->spacetime->d2h($this->toDays());
    }

    #[\Override] protected function toMinutes(): float|int
    {
        return $this->spacetime->h2min($this->toHours());
    }
}
