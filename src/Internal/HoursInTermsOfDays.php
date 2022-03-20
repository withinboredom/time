<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfDays
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inHours(): float
    {
        return $this->inDays() * $this->spacetime->hoursInDays();
    }
}
