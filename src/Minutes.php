<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\NanosecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Minutes extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    use NanosecondsInTermsOfMicroseconds;
    #[\Override] protected function toMinutes(): float|int
    {
        return $this->getValue();
    }

    #[\Override] public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toMinutes(), $time->spacetime);
    }
}
