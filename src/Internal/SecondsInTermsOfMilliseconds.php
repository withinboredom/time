<?php

namespace Withinboredom\Time\Internal;

use Withinboredom\Time\TimeAndSpaceInterface;

trait SecondsInTermsOfMilliseconds
{
    protected function toSeconds(): float|int
    {
        return $this->toMilliseconds() / $this->spacetime->millisecondsInSeconds();
    }
}
