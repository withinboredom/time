<?php

namespace Withinboredom\Time\Internal;

trait SecondsInTermsOfMilliseconds
{
    protected function toSeconds(): float|int
    {
        return $this->toMilliseconds() / $this->spacetime->millisecondsInSeconds();
    }
}
