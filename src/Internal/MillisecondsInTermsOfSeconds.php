<?php

namespace Withinboredom\Time\Internal;

trait MillisecondsInTermsOfSeconds
{
    protected function toMilliseconds(): float|int
    {
        return $this->toSeconds() * $this->spacetime->millisecondsInSeconds();
    }
}
