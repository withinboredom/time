<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MicrosecondsInTermsOfMilliseconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function microseconds(): float
    {
        return $this->milliseconds() * $this->spacetime->microsecondsInMilliseconds();
    }
}
