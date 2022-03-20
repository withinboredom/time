<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait DaysInTermsOfWeeks
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inDays(): float
    {
        return $this->inWeeks() * $this->spacetime->daysInWeeks();
    }
}
