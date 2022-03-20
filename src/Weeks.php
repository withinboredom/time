<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfWeeks;
use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;

final class Weeks implements ConvertedTimeInterface
{
    use DaysInTermsOfWeeks;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    #[Pure]
    public function __construct(
        private float $weeks,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    #[Pure]
    public static function from(
        float|int $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return new ReadableWeeks($time, $spacetime);
    }
    
    public function inWeeks(): float
    {
        return $this->weeks;
    }
}
