<?php

namespace Withinboredom\Time\Internal;

trait SecondsInTermsOfMinutes
{
    protected function toSeconds(): float|int
    {
        return $this->toMinutes() * $this->spacetime->secondsInMinutes();
    }
}
