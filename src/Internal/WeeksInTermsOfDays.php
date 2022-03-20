<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait WeeksInTermsOfDays
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inWeeks(): float
    {
        return $this->inDays() / $this->spacetime->daysInWeeks();
    }
}
