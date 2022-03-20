<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait DaysInTermsOfHours {
    private TimeAndSpaceInterface $spacetime;
    
    public function inDays(): float {
        return $this->inHours() / $this->spacetime->hoursInDays();
    }
}
