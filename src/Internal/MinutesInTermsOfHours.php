<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MinutesInTermsOfHours
{

    protected function toMinutes(): float|int
    {
        return $this->toHours() * $this->spacetime->minutesInHours();
    }
}
