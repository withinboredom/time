<?php

namespace Withinboredom\Time;

final class ReadableSeconds implements ReadableConverterInterface
{
    public function __construct(private float $constant, private TimeAndSpaceInterface $spacetime)
    {
    }
    
    public function days(): float
    {
        return (new Days($this->constant, $this->spacetime))->inSeconds();
    }
    
    public static function from(
        float|int|ReadableConverterInterface $time,
        TimeAndSpaceInterface $spacetime = new StandardEarthTime()
    ): ReadableConverterInterface {
        return Seconds::from($time, $spacetime);
    }
    
    public function hours(): float
    {
        return (new Hours($this->constant, $this->spacetime))->inSeconds();
    }
    
    public function microseconds(): float
    {
        return (new Microseconds($this->constant, $this->spacetime))->inSeconds();
    }
    
    public function milliseconds(): float
    {
        return (new Milliseconds($this->constant, $this->spacetime))->inSeconds();
    }
    
    public function minutes(): float
    {
        return (new Minutes($this->constant, $this->spacetime))->inSeconds();
    }
    
    public function seconds(): float
    {
        return $this->constant;
    }
    
    public function weeks(): float
    {
        return (new Weeks($this->constant, $this->spacetime))->inSeconds();
    }
}
