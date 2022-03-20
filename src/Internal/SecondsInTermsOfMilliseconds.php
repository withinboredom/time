<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMilliseconds
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inSeconds(): float
    {
        return $this->inMilliseconds() / $this->spacetime->millisecondsInSeconds();
    }
}
