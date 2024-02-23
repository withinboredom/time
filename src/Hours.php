<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\NanosecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Hours extends AnyTime
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    use NanosecondsInTermsOfMicroseconds;
    public function toHours(): float|int
    {
        return $this->getValue();
    }

    public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toHours(), $time->spacetime);
    }
}
