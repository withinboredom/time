<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MillisecondsInTermsOfMicroseconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Microseconds implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;
    use MillisecondsInTermsOfMicroseconds;
    
    public function __construct(
        private float $microseconds,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Microseconds($time->microseconds(), $spacetime),
            default => new Milliseconds($time, $spacetime)
        };
    }
    
    public function microseconds(): float
    {
        return $this->microseconds;
    }
}
