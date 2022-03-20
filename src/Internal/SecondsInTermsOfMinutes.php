<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMinutes
{
    private TimeAndSpaceInterface $spacetime;
    
    public function seconds(): float
    {
        return $this->minutes() * $this->spacetime->secondsInMinutes();
    }
}
