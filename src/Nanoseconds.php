<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

class Nanoseconds extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toNanoseconds(), $time->spacetime);
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->getValue();
    }

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ns2us($this->toNanoseconds());
    }

    #[\Override] protected function toMilliseconds(): float|int
    {
        return $this->spacetime->us2ms($this->toMicroseconds());
    }
}
