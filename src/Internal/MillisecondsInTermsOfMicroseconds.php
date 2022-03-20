<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfMicroseconds {
    private TimeAndSpaceInterface $spacetime;
    
    public function inMilliseconds(): float {
        return $this->inMicroseconds() / $this->spacetime->microsecondsInMilliseconds();
    }
}
