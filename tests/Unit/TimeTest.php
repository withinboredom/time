<?php

use Withinboredom\Time\Days;
use Withinboredom\Time\Hours;
use Withinboredom\Time\Microseconds;
use Withinboredom\Time\Milliseconds;
use Withinboredom\Time\Minutes;
use Withinboredom\Time\Nanoseconds;
use Withinboredom\Time\Seconds;
use Withinboredom\Time\Weeks;

use function Withinboredom\Time\Days;
use function Withinboredom\Time\Hours;
use function Withinboredom\Time\Minutes;
use function Withinboredom\Time\Seconds;
use function Withinboredom\Time\Weeks;

test('unit', function (string $className, int $week) {
    $day = $className::fromValue($week);
    $dayf = $className::fromValue($week);
    expect($dayf)->toBe($day)
        ->and($day->inWeeks())->toBe(Weeks(1))
        ->and($day->inNanoseconds())->toBe(Nanoseconds::fromValue(6.0480E+14));
})->with([
    'weeks' => [Weeks::class, 1],
    'days' => [Days::class, 7],
    'hours' => [Hours::class, 7 * 24],
    'minutes' => [Minutes::class, 7 * 24 * 60],
    'seconds' => [Seconds::class, 7 * 24 * 60 * 60],
    'milliseconds' => [Milliseconds::class, 7 * 24 * 60 * 60 * 1000],
    'microseconds' => [Microseconds::class, 7 * 24 * 60 * 60 * 1000 * 1000],
    'nanoseconds' => [Nanoseconds::class, 7 * 24 * 60 * 60 * 1000 * 1000 * 1000],
]);

test('equality', function () {
    $secondInMs = Milliseconds::fromValue(1000);
    $second = Days::from($secondInMs);
    expect($second)->toBe(Seconds::fromValue(1));
});

test("Date intervals work", function () {
    $var = Seconds(1);
    $var = $var->add(Minutes(1));
    $var = $var->add(Hours(1));
    $var = $var->add(Days(1));
    $var = $var->add(Weeks(1));

    $now = new DateTimeImmutable('2024-01-01 00:00:00');
    $expected = new DateTimeImmutable('2024-01-02 01:01:01');

    expect($now->add($var->toDateInterval()))->toEqual($expected);
});
