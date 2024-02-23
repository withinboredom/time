<?php

namespace Withinboredom\Time\Internal;

trait MillisecondsInTermsOfMicroseconds
{
    protected function toMilliseconds(): float|int
    {
        return $this->toMicroseconds() / $this->spacetime->microsecondsInMilliseconds();
    }
}
