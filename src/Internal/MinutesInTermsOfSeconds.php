<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfSeconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function minutes(): float
    {
        return $this->seconds() / $this->spacetime->secondsInMinutes();
    }
}
