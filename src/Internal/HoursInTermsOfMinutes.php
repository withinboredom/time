<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfMinutes
{
    private TimeAndSpaceInterface $spacetime;
    
    public function hours(): float
    {
        return $this->minutes() / $this->spacetime->minutesInHours();
    }
}
