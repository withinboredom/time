<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfSeconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inMinutes(): float
    {
        return $this->inSeconds() / $this->spacetime->secondsInMinutes();
    }
}
