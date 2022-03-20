<?php

namespace Withinboredom\Time;

interface ConvertedTimeInterface
{
    public static function from(
        int|float $time,
        TimeAndSpaceInterface $spacetime
    ): ReadableConverterInterface;
    
    public function inMicroseconds(): float;
    
    public function inSeconds(): float;
    
    public function inMilliseconds(): float;
    
    public function inMinutes(): float;
    
    public function inHours(): float;
    
    public function inDays(): float;
    
    public function inWeeks(): float;
}
