<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait DaysInTermsOfHours {
    private TimeAndSpaceInterface $spacetime;
    
    public function days(): float {
        return $this->hours() / $this->spacetime->hoursInDays();
    }
}
