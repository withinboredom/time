<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait MillisecondsInTermsOfSeconds
{

    protected function toMilliseconds(): float|int
    {
        return $this->toSeconds() * $this->spacetime->millisecondsInSeconds();
    }
}
