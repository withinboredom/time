<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\NanosecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Days extends AnyTime
{
    use WeeksInTermsOfDays;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    use NanosecondsInTermsOfMicroseconds;

    public function toDays(): float|int
    {
        return $this->getValue();
    }

    public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toDays(), $time->spacetime);
    }
}
