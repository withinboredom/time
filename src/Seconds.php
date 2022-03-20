<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Seconds implements ConvertedTimeInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    #[Pure]
    public function __construct(
        private float $seconds,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    #[Pure]
    public static function from(
        int|float $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return new ReadableSeconds($time, $spacetime);
    }
    
    public function inSeconds(): float
    {
        return $this->seconds;
    }
}
