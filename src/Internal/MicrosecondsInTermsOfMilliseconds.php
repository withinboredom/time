<?php

namespace Withinboredom\Time\Internal;

trait MicrosecondsInTermsOfMilliseconds
{
    protected function toMicroseconds(): float|int
    {
        return $this->toMilliseconds() * $this->spacetime->microsecondsInMilliseconds();
    }
}
