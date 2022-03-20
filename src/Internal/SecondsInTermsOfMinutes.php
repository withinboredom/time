<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMinutes
{
    private TimeAndSpaceInterface $spacetime;
    
    public function inSeconds(): float
    {
        return $this->inMinutes() * $this->spacetime->secondsInMinutes();
    }
}
