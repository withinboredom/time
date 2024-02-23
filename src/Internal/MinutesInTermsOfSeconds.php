<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfSeconds
{

    protected function toMinutes(): float|int
    {
        return $this->toSeconds() / $this->spacetime->secondsInMinutes();
    }
}
