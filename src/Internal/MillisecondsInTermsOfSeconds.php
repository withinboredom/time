<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfSeconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inMilliseconds(): float
    {
        return $this->inSeconds() * $this->spacetime->millisecondsInSeconds();
    }
}
