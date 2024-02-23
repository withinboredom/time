<?php

namespace Withinboredom\Time;

final class Milliseconds extends AnyTime
{
    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toMilliseconds(), $time->spacetime);
    }

    #[\Override] protected function toMilliseconds(): float|int
    {
        return $this->getValue();
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }

    #[\Override] protected function toSeconds(): float|int
    {
        return $this->spacetime->ms2s($this->toMilliseconds());
    }

    #[\Override] protected function toMinutes(): float|int
    {
        return $this->spacetime->s2min($this->toSeconds());
    }


    #[\Override] protected function toDays(): float|int
    {
        return $this->spacetime->h2d($this->toHours());
    }

    #[\Override] protected function toHours(): float|int
    {
        return $this->spacetime->min2h($this->toMinutes());
    }

    #[\Override] protected function toWeeks(): float|int
    {
        return $this->spacetime->d2w($this->toDays());
    }
}
