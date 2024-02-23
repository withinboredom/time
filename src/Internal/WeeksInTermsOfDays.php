<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait WeeksInTermsOfDays
{
    protected function toWeeks(): float|int
    {
        return $this->toDays() / $this->spacetime->daysInWeeks();
    }
}
