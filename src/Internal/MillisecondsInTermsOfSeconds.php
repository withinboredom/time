<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfSeconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function milliseconds(): float
    {
        return $this->seconds() * $this->spacetime->millisecondsInSeconds();
    }
}
