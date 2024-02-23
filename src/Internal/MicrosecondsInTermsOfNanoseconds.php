<?php

namespace Withinboredom\Time\Internal;

trait MicrosecondsInTermsOfNanoseconds
{
    public function toMicroseconds(): float|int
    {
        return $this->toNanoseconds() / $this->spacetime->nanosecondsInMicroseconds();
    }
}
