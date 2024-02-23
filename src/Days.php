<?php

namespace Withinboredom\Time;

use Withinboredom\Time\Internal\HoursInTermsOfDays;
use Withinboredom\Time\Internal\MillisecondsInTermsOfSeconds;
use Withinboredom\Time\Internal\MinutesInTermsOfHours;
use Withinboredom\Time\Internal\SecondsInTermsOfMinutes;
use Withinboredom\Time\Internal\WeeksInTermsOfDays;

final class Days extends AnyTime
{
    use WeeksInTermsOfDays;
    use HoursInTermsOfDays;
    use MinutesInTermsOfHours;
    use SecondsInTermsOfMinutes;
    use MillisecondsInTermsOfSeconds;

    #[\Override] protected function toMicroseconds(): float|int
    {
        return $this->spacetime->ms2us($this->toMilliseconds());
    }

    public static function from(AnyTime $time): static
    {
        return self::fromValue($time->toDays(), $time->spacetime);
    }

    public function toDays(): float|int
    {
        return $this->getValue();
    }

    #[\Override] protected function toNanoseconds(): float|int
    {
        return $this->spacetime->us2ns($this->toMicroseconds());
    }
}
