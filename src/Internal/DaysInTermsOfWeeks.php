<?php

namespace Withinboredom\Time\Internal;

trait DaysInTermsOfWeeks
{
    protected function toDays(): float|int
    {
        return $this->toWeeks() * $this->spacetime->daysInWeeks();
    }
}
