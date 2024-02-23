<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MillisecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\NanosecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Microseconds extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;
    use MillisecondsInTermsOfMicroseconds;
    use NanosecondsInTermsOfMicroseconds;

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toMicroseconds(), $time->spacetime);
    }

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->getValue();
    }
}
