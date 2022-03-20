<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait HoursInTermsOfMinutes
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inHours(): float
    {
        return $this->inMinutes() / $this->spacetime->minutesInHours();
    }
}
