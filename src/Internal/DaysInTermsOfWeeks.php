<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait DaysInTermsOfWeeks
{

    protected function toDays(): float|int
    {
        return $this->toWeeks() * $this->spacetime->daysInWeeks();
    }
}
