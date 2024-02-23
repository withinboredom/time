<?php

namespace Withinboredom\Time\Internal;

trait MinutesInTermsOfHours
{
    protected function toMinutes(): float|int
    {
        return $this->toHours() * $this->spacetime->minutesInHours();
    }
}
