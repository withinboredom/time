<?php

namespace Withinboredom\Time\Internal;

trait MinutesInTermsOfSeconds
{
    protected function toMinutes(): float|int
    {
        return $this->toSeconds() / $this->spacetime->secondsInMinutes();
    }
}
