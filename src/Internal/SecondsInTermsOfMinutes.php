<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMinutes
{

    protected function toSeconds(): float|int
    {
        return $this->toMinutes() * $this->spacetime->secondsInMinutes();
    }
}
