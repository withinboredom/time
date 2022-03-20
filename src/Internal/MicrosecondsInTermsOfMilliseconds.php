<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MicrosecondsInTermsOfMilliseconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inMicroseconds(): float
    {
        return $this->inMilliseconds() * $this->spacetime->microsecondsInMilliseconds();
    }
}
