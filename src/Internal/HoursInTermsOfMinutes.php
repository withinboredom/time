<?php

namespace Withinboredom\Time\Internal;

trait HoursInTermsOfMinutes
{
    protected function toHours(): float|int
    {
        return $this->toMinutes() / $this->spacetime->minutesInHours();
    }
}
