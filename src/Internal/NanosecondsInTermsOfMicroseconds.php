<?php

namespace Withinboredom\Time\Internal;

trait NanosecondsInTermsOfMicroseconds
{
    public function toNanoseconds(): float|int {
        return $this->toMicroseconds() * $this->spacetime->nanosecondsInMicroseconds();
    }
}
