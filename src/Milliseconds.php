<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Milliseconds extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toMilliseconds(), $time->spacetime);
    }

    #[\Override] protected function toMilliseconds(): float|int
    {
        return $this->getValue();
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }
}
