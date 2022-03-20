<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfDays
{
    private TimeAndSpaceInterface $spacetime;
    
    public function hours(): float
    {
        return $this->days() * $this->spacetime->hoursInDays();
    }
}
