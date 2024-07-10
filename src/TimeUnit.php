<?php

namespace Withinboredom\Time;

enum TimeUnit: int
{
    case Nanoseconds = 1;
    case Microseconds = 1000;
    case Milliseconds = 1000000;
    case Seconds = 1000000000;
    case Minutes = 60000000000;
    case Hours = 3600000000000;
    case Days = 86400000000000;
    case Weeks = 604800000000000;
}
