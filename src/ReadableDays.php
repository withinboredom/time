<?php

namespace Withinboredom\Time;

final class ReadableDays implements ReadableConverterInterface
{
    public function __construct(private float $constant, private TimeAndSpaceInterface $spacetime)
    {
    }
    
    public function days(): float
    {
        return (new Days($this->constant, $this->spacetime))->inDays();
    }
    
    public function hours(): float
    {
        return (new Hours($this->constant, $this->spacetime))->indays();
    }
    
    public function microseconds(): float
    {
        return (new Microseconds($this->constant, $this->spacetime))->indays();
    }
    
    public function milliseconds(): float
    {
        return (new Milliseconds($this->constant, $this->spacetime))->indays();
    }
    
    public function minutes(): float
    {
        return (new Minutes($this->constant, $this->spacetime))->indays();
    }
    
    public function seconds(): float
    {
        return (new Seconds($this->constant, $this->spacetime))->indays();
    }
    
    public function weeks(): float
    {
        return (new Weeks($this->constant, $this->spacetime))->inDays();
    }
}
