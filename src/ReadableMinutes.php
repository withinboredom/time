<?php

namespace Withinboredom\Time;

final class ReadableMinutes implements TimeConverterInterface
{
    public function __construct(private float $constant, private TimeAndSpaceInterface $spacetime)
    {
    }
    
    public function days(): float
    {
        return (new Days($this->constant, $this->spacetime))->inMinutes();
    }
    
    public function hours(): float
    {
        return (new Hours($this->constant, $this->spacetime))->inMinutes();
    }
    
    public function microseconds(): float
    {
        return (new Microseconds($this->constant, $this->spacetime))->inMinutes();
    }
    
    public function milliseconds(): float
    {
        return (new Milliseconds($this->constant, $this->spacetime))->inMinutes();
    }
    
    public function minutes(): float
    {
        return $this->constant;
    }
    
    public function seconds(): float
    {
        return (new Seconds($this->constant, $this->spacetime))->inMinutes();
    }
    
    public function weeks(): float
    {
        return (new Weeks($this->constant, $this->spacetime))->inMinutes();
    }
}
