<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfMicroseconds {
    private TimeAndSpaceInterface $spacetime;
    
    public function milliseconds(): float {
        return $this->microseconds() / $this->spacetime->microsecondsInMilliseconds();
    }
}
