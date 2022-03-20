<?php

namespace Withinboredom\Time;

use JetBrains\PhpStorm\Pure;
use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MicrosecondsInTermsOfMilliseconds;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Days implements ConvertedTimeInterface
{
    use WeeksInTermsOfDays;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;
    use MicrosecondsInTermsOfMilliseconds;
    
    #[Pure]
    public function __construct(private float $days, private TimeAndSpaceInterface $spacetime = new StandardEarthTime())
    {
    }
    
    #[Pure]
    public static function from(
        float|int $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return new ReadableDays($time, $spacetime);
    }
    
    public function inDays(): float
    {
        return $this->days;
    }
}
