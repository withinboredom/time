<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Milliseconds implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(
        private float $milliseconds,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Milliseconds($time->milliseconds()),
            default => new Milliseconds($time, $spacetime)
        };
    }
    
    public function milliseconds(): float
    {
        return $this->milliseconds;
    }
}
