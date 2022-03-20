<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMilliseconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function seconds(): float
    {
        return $this->milliseconds() / $this->spacetime->millisecondsInSeconds();
    }
}
