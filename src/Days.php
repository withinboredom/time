<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Days implements TimeConverterInterface
{
    use WeeksInTermsOfDays;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    public function __construct(private float $days, private TimeAndSpaceInterface $spacetime = new StandardEarthTime())
    {
    }
    
    public function days(): float
    {
        return $this->days;
    }
    
    public static function from(
        float|int|TimeConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): TimeConverterInterface {
        return match (true) {
            $time instanceof TimeConverterInterface => new Days($time->days(), $spacetime),
            default => new Days($time, $spacetime)
        };
    }
}
