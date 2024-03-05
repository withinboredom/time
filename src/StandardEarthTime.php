<?php

namespace Withinboredom\Time;

use Override;

final class StandardEarthTime implements TimeAndSpaceInterface
{
    private static StandardEarthTime $duration;

    public static function duration(): self
    {
        return self::$duration ??= new self();
    }

    #[Override] public function fromNanoSeconds(int $nanoseconds): AnyTime
    {
        return AnyTime::fromValue($nanoseconds, $this);
    }

    #[Override] public function fromMicroseconds(float $microseconds): AnyTime
    {
        return AnyTime::fromValue($this->microsecondsToNanoSeconds($microseconds), $this);
    }

    #[Override] public function microsecondsToNanoSeconds(float $microseconds): float
    {
        return 1000.0 * $microseconds;
    }

    #[Override] public function fromMilliseconds(float $milliseconds): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds($this->millisecondsToMicroseconds($milliseconds)),
            $this
        );
    }

    #[Override] public function millisecondsToMicroseconds(float $microseconds): float
    {
        return $microseconds * 1000.0;
    }

    #[Override] public function fromSeconds(float $seconds): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds($this->millisecondsToMicroseconds($this->secondsToMilliseconds($seconds))),
            $this
        );
    }

    #[Override] public function secondsToMilliseconds(float $seconds): float
    {
        return $seconds * 1000.0;
    }

    #[Override] public function fromMinutes(float $minutes): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds(
                $this->millisecondsToMicroseconds($this->secondsToMilliseconds($this->minutesToSeconds($minutes)))
            ),
            $this
        );
    }

    #[Override] public function minutesToSeconds(float $minutes): float
    {
        return $minutes * 60.0;
    }

    #[Override] public function fromHours(float $hours): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds(
                $this->millisecondsToMicroseconds(
                    $this->secondsToMilliseconds($this->minutesToSeconds($this->hoursToMinutes($hours)))
                )
            ),
            $this
        );
    }

    #[Override] public function hoursToMinutes(float $hours): float
    {
        return $hours * 60.0;
    }

    #[Override] public function fromDays(float $days): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds(
                $this->millisecondsToMicroseconds(
                    $this->secondsToMilliseconds(
                        $this->minutesToSeconds($this->hoursToMinutes($this->daysToHours($days)))
                    )
                )
            ),
            $this
        );
    }

    #[Override] public function daysToHours(float $days): float
    {
        return $days * 24.0;
    }

    #[Override] public function fromWeeks(float $weeks): AnyTime
    {
        return AnyTime::fromValue(
            $this->microsecondsToNanoSeconds(
                $this->millisecondsToMicroseconds(
                    $this->secondsToMilliseconds(
                        $this->minutesToSeconds(
                            $this->hoursToMinutes($this->daysToHours($this->weeksToDays($weeks)))
                        )
                    )
                )
            ),
            $this
        );
    }

    #[Override] public function weeksToDays(float $weeks): float
    {
        return $weeks * 7.0;
    }
}
