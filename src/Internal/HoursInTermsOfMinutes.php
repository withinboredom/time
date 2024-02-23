<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfMinutes
{
    protected function toHours(): float|int
    {
        return $this->toMinutes() / $this->spacetime->minutesInHours();
    }
}
