<?php

namespace Withinboredom\Time;

function Nanoseconds(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromNanoSeconds($time);
}

function Microseconds(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromMicroseconds($time);
}

function Milliseconds(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromMilliseconds($time);
}

function Seconds(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromSeconds($time);
}

function Minutes(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromMinutes($time);
}

function Hours(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromHours($time);
}

function Days(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromDays($time);
}

function Weeks(float $time, TimeAndSpaceInterface|null $spacetime = null): AnyTime
{
    return ($spacetime ?? StandardEarthTime::duration())->fromWeeks($time);
}

define('StandardNanosecond', Nanoseconds(1));
define('StandardMicrosecond', Microseconds(1));
define('StandardMillisecond', Milliseconds(1));
define('StandardSecond', Seconds(1));
define('StandardMinute', Minutes(1));
define('StandardHour', Hours(1));
define('StandardDay', Days(1));
define('StandardWeek', Weeks(1));
