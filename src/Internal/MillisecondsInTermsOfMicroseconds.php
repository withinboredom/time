<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfMicroseconds
{

    protected function toMilliseconds(): float|int
    {
        return $this->toMicroseconds() / $this->spacetime->microsecondsInMilliseconds();
    }
}
