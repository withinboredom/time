<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfDays
{
    protected function toHours(): float|int
    {
        return $this->toDays() * $this->spacetime->hoursInDays();
    }
}
