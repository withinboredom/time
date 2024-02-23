<?php

namespace Withinboredom\Time;

final class Hours extends AnyTime
{
    #[\Override] protected function toDays(): float|int
    {
        return $this->spacetime->h2d($this->toHours());
    }

    #[\Override] protected function toWeeks(): float|int
    {
        return $this->spacetime->d2w($this->toDays());
    }

    #[\Override] protected function toMilliseconds(): float|int
    {
        return $this->spacetime->s2ms($this->toSeconds());
    }

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }

    public function toHours(): float|int
    {
        return $this->getValue();
    }

    public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toHours(), $time->spacetime);
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }

    #[\Override] protected function toSeconds(): float|int
    {
        return $this->spacetime->min2s($this->toMinutes());
    }

    #[\Override] protected function toMinutes(): float|int
    {
        return $this->spacetime->h2min($this->toHours());
    }
}
