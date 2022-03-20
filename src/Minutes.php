<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Minutes implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(
        private float $minutes,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Minutes($time->minutes(), $spacetime),
            default => new Minutes($time, $spacetime)
        };
    }
    
    public function minutes(): float
    {
        return $this->minutes;
    }
}
