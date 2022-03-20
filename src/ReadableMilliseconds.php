<?php

namespace Withinboredom\Time;

final class ReadableMilliseconds implements TimeConverterInterface
{
    public function __construct(private float $constant, private TimeAndSpaceInterface $spacetime)
    {
    }
    
    public function days(): float
    {
        return (new Days($this->constant, $this->spacetime))->inMilliseconds();
    }
    
    public function hours(): float
    {
        return (new Hours($this->constant, $this->spacetime))->inMilliseconds();
    }
    
    public function microseconds(): float
    {
        return (new Microseconds($this->constant, $this->spacetime))->inMilliseconds();
    }
    
    public function milliseconds(): float
    {
        return $this->constant;
    }
    
    public function minutes(): float
    {
        return (new Minutes($this->constant, $this->spacetime))->inMilliseconds();
    }
    
    public function seconds(): float
    {
        return (new Seconds($this->constant, $this->spacetime))->inMilliseconds();
    }
    
    public function weeks(): float
    {
        return (new Weeks($this->constant, $this->spacetime))->inMilliseconds();
    }
}
