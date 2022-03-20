<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Hours implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(
        private float $hours,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Hours($time->hours(), $spacetime),
            default => new Hours($time, $spacetime)
        };
    }
    
    public function hours(): float
    {
        return $this->hours;
    }
}
