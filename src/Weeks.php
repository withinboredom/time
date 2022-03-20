<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfWeeks;
use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;

final class Weeks implements TimeConverterInterface
{
    use DaysInTermsOfWeeks;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(
        private float $weeks,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Weeks($time->weeks(), $spacetime),
            default => new Weeks($time, $spacetime)
        };
    }
    
    public function weeks(): float
    {
        return $this->weeks;
    }
}
