<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\DaysInTermsOfHours;
use Withinboredom\Time\Internal\HoursInTermsOfMinutes;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MinutesInTermsOfSeconds;
use Withinboredom\Time\Internal\SecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Milliseconds implements ConvertedTimeInterface
{
    use WeeksInTermsOfDays;
    use DaysInTermsOfHours;
    use HoursInTermsOfMinutes;
    use MinutesInTermsOfSeconds;
    use SecondsInTermsOfMilliseconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    #[Pure]
    public function __construct(
        private float $milliseconds,
        private TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ) {
    }
    
    #[Pure]
    public static function from(
        float|int $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return new ReadableMilliseconds($time, $spacetime);
    }
    
    public function inMilliseconds(): float
    {
        return $this->milliseconds;
    }
}
