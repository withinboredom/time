<?php

namespace Withinboredom\Time\Internal;

trait WeeksInTermsOfDays
{
    protected function toWeeks(): float|int
    {
        return $this->toDays() / $this->spacetime->daysInWeeks();
    }
}
