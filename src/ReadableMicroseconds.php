<?php

namespace Withinboredom\Time;

final class ReadableMicroseconds implements TimeConverterInterface
{
    public function __construct(private float $constant, private TimeAndSpaceInterface $spacetime)
    {
    }
    
    public function days(): float
    {
        return (new Days($this->constant, $this->spacetime))->inMicroseconds();
    }
    
    public function hours(): float
    {
        return (new Hours($this->constant, $this->spacetime))->inMicroseconds();
    }
    
    public function microseconds(): float
    {
        return $this->constant;
    }
    
    public function milliseconds(): float
    {
        return (new Milliseconds($this->constant, $this->spacetime))->inMicroseconds();
    }
    
    public function minutes(): float
    {
        return (new Minutes($this->constant, $this->spacetime))->inMicroseconds();
    }
    
    public function seconds(): float
    {
        return (new Seconds($this->constant, $this->spacetime))->inMicroseconds();
    }
    
    public function weeks(): float
    {
        return (new Weeks($this->constant, $this->spacetime))->inMicroseconds();
    }
}
