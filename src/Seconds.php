<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Seconds implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(
        private float $seconds,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        int|float|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Seconds($time->seconds(), $spacetime),
            default => new Seconds($time, $spacetime)
        };
    }
    
    public function seconds(): float
    {
        return $this->seconds;
    }
}
