<?php

namespace Withinboredom\Time;

function Nanoseconds(float $time): Time
{
    return Time::from(TimeUnit::Nanoseconds, $time);
}

function Microseconds(float $time): Time
{
    return Time::from(TimeUnit::Microseconds, $time);
}

function Milliseconds(float $time): Time
{
    return Time::from(TimeUnit::Milliseconds, $time);
}

function Seconds(float $time): Time
{
    return Time::from(TimeUnit::Seconds, $time);
}

function Minutes(float $time): Time
{
    return Time::from(TimeUnit::Minutes, $time);
}

function Hours(float $time): Time
{
    return Time::from(TimeUnit::Hours, $time);
}

function Days(float $time): Time
{
    return Time::from(TimeUnit::Days, $time);
}

function Weeks(float $time): Time
{
    return Time::from(TimeUnit::Weeks, $time);
}

define('Nanosecond', Nanoseconds(1));
define('Microsecond', Microseconds(1));
define('Millisecond', Milliseconds(1));
define('Second', Seconds(1));
define('Minute', Minutes(1));
define('Hour', Hours(1));
define('Day', Days(1));
define('Week', Weeks(1));
