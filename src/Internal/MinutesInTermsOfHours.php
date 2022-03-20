<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfHours
{
    private TimeAndSpaceInterface $spacetime;
    
    public function minutes(): float
    {
        return $this->hours() * $this->spacetime->minutesInHours();
    }
}
