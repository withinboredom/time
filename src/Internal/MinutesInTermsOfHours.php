<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfHours
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inMinutes(): float
    {
        return $this->inHours() * $this->spacetime->minutesInHours();
    }
}
