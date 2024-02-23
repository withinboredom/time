<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MicrosecondsInTermsOfMilliseconds
{
    protected function toMicroseconds(): float|int
    {
        return $this->toMilliseconds() * $this->spacetime->microsecondsInMilliseconds();
    }
}
