<?php

namespace Withinboredom\Time\Internal;

trait DaysInTermsOfHours
{
    protected function toDays(): float|int
    {
        return $this->toHours() / $this->spacetime->hoursInDays();
    }
}
