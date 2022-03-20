<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait WeeksInTermsOfDays
{
    private TimeAndSpaceInterface $spacetime;
    
    public function weeks(): float
    {
        return $this->days() / $this->spacetime->daysInWeeks();
    }
}
