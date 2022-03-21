<?php

namespace Withinboredom\Time;

function Microseconds(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Microseconds($time, $spacetime); }
function Milliseconds(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Milliseconds($time, $spacetime); }
function Seconds(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Seconds($time, $spacetime); }
function Minutes(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Minutes($time, $spacetime); }
function Hours(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Hours($time, $spacetime); }
function Days(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Days($time, $spacetime); }
function Weeks(float $time, TimeAndSpaceInterface $spacetime = new StandardEarthTime()): ConvertedTimeInterface { return new Weeks($time, $spacetime); }
