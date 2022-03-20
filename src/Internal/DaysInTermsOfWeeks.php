<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait DaysInTermsOfWeeks
{
    private TimeAndSpaceInterface $spacetime;
    
    public function days(): float
    {
        return $this->weeks() * $this->spacetime->daysInWeeks();
    }
}
