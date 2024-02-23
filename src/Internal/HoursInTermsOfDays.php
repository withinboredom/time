<?php

namespace Withinboredom\Time\Internal;

trait HoursInTermsOfDays
{
    protected function toHours(): float|int
    {
        return $this->toDays() * $this->spacetime->hoursInDays();
    }
}
