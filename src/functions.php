<?php

namespace Withinboredom\Time;

function Microseconds(float $time, TimeAndSpaceInterface|null $spacetime = null): Microseconds
{
    return Microseconds::fromValue($time, $spacetime);
}

function Milliseconds(float $time, TimeAndSpaceInterface|null $spacetime = null): Milliseconds
{
    return Milliseconds::fromValue($time, $spacetime);
}

function Seconds(float $time, TimeAndSpaceInterface|null $spacetime = null): Seconds
{
    return Seconds::fromValue($time, $spacetime);
}

function Minutes(float $time, TimeAndSpaceInterface|null $spacetime = null): Minutes
{
    return Minutes::fromValue($time, $spacetime);
}

function Hours(float $time, TimeAndSpaceInterface|null $spacetime = null): Hours
{
    return Hours::fromValue($time, $spacetime);
}

function Days(float $time, TimeAndSpaceInterface|null $spacetime = null): Days
{
    return Days::fromValue($time, $spacetime);
}

function Weeks(float $time, TimeAndSpaceInterface|null $spacetime = null): Weeks
{
    return Weeks::fromValue($time, $spacetime);
}
