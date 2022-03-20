<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Minutes implements ConvertedTimeInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    #[Pure]
    public function __construct(
        private float $minutes,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    #[Pure]
    public static function from(
        float|int $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return new ReadableMinutes($time, $spacetime);
    }
    
    public function inMinutes(): float
    {
        return $this->minutes;
    }
}
