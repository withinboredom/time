<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Minutes extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    #[\Override] protected function toMinutes(): float|int
    {
        return $this->getValue();
    }

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toMinutes(), $time->spacetime);
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }
}
