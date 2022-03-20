<?php

namespace Withinboredom\Time;

interface ReadableConverterInterface
{
    public function microseconds(): float;
    
    public function milliseconds(): float;
    
    public function seconds(): float;
    
    public function minutes(): float;
    
    public function hours(): float;
    
    public function days(): float;
    
    public function weeks(): float;
}
