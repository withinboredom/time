<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfWeeks;
use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\NanosecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;

final class Weeks extends AnyTime
{
    use DaysInTermsOfWeeks;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    use NanosecondsInTermsOfMicroseconds;
    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toWeeks(), $time->spacetime);
    }

    #[\Override] protected function toWeeks(): float|int
    {
        return $this->getValue();
    }
}
