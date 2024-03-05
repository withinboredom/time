<?php

use Withinboredom\Time\AnyTime;

use function Withinboredom\Time\Days;
use function Withinboredom\Time\Hours;
use function Withinboredom\Time\Microseconds;
use function Withinboredom\Time\Milliseconds;
use function Withinboredom\Time\Minutes;
use function Withinboredom\Time\Nanoseconds;
use function Withinboredom\Time\Seconds;
use function Withinboredom\Time\Weeks;

test('unit', function (AnyTime $time, int $week) {
    expect($time)->toBe(Weeks(1))
        ->and($time->inWeeks())->toBe(1.0);
})->with([
    'weeks' => [Weeks(1), 1],
    'days' => [Days(7), 7],
    'hours' => [Hours(7 * 24), 7 * 24],
    'minutes' => [Minutes(7 * 24 * 60), 7 * 24 * 60],
    'seconds' => [Seconds(7 * 24 * 60 * 60), 7 * 24 * 60 * 60],
    'milliseconds' => [Milliseconds(7 * 24 * 60 * 60 * 1000), 7 * 24 * 60 * 60 * 1000],
    'microseconds' => [Microseconds(7 * 24 * 60 * 60 * 1000 * 1000), 7 * 24 * 60 * 60 * 1000 * 1000],
    'nanoseconds' => [Nanoseconds(7 * 24 * 60 * 60 * 1000 * 1000 * 1000), 7 * 24 * 60 * 60 * 1000 * 1000 * 1000],
]);

test('equality', function () {
    $secondInMs = Milliseconds(1000);
    $second = Seconds(1);
    expect($second)->toBe(Seconds(1))
        ->and($secondInMs)->toEqual(Seconds(1));
});

test("Date intervals work", function () {
    $var = Seconds(1);
    $var = $var->add(Minutes(1));
    $var = $var->add(Hours(1));
    $var = $var->add(Days(1));
    $var = $var->add(Weeks(1));

    $now = new DateTimeImmutable('2024-01-01 00:00:00');
    $expected = new DateTimeImmutable($now->format('Y-m-d') . ' +1 week 1 day 1 hour 1 minute 1 second');

    $interval = $var->toDateInterval();

    expect($var->inSeconds())->toBe(694861.0)
        ->and($now->add($interval))->toEqual($expected)
        ->and($var->inSeconds())->toBe(694861.0);
});

it('cannot be serialized', function () {
    $var = Seconds(1);
    expect(fn() => serialize($var))->toThrow(LogicException::class);
});

it('cannot be cloned', function () {
    $var = Seconds(1);
    expect(fn() => clone $var)->toThrow(LogicException::class);
});

it('can be compared', function () {
    $middle = Seconds(3);
    $left  = Seconds(1);
    $right = Seconds(5);

    expect($left < $middle)->toBeTrue()
        ->and($right > $middle)->toBeTrue()
        ->and($left < $right)->toBeTrue();
});
