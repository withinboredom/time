<?php

namespace Withinboredom\Time;

use PHPUnit\Framework\TestCase;

class ConversionTest extends TestCase
{
    public function testMicroseconds() {
        $expected = 1209600000000.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
    
        $this->assertSame($expected, $weeks->microseconds(), 'weeks');
        $this->assertSame($expected, $days->microseconds(), 'days');
        $this->assertSame($expected, $hours->microseconds(), 'hours');
        $this->assertSame($expected, $minutes->microseconds(), 'minutes');
        $this->assertSame($expected, $seconds->microseconds(), 'seconds');
        $this->assertSame($expected, $milliseconds->microseconds(), 'milliseconds');
        $this->assertSame($expected, $microseconds->microseconds(), 'microseconds');
    }
    
    public function testMilliseconds()
    {
        $expected = 1209600000.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->milliseconds(), 'weeks');
        $this->assertSame($expected, $days->milliseconds(), 'days');
        $this->assertSame($expected, $hours->milliseconds(), 'hours');
        $this->assertSame($expected, $minutes->milliseconds(), 'minutes');
        $this->assertSame($expected, $seconds->milliseconds(), 'seconds');
        $this->assertSame($expected, $milliseconds->milliseconds(), 'milliseconds');
        $this->assertSame($expected, $microseconds->milliseconds(), 'microseconds');
    }
    
    public function testSeconds()
    {
        $expected = 1209600.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->seconds(), 'weeks');
        $this->assertSame($expected, $days->seconds(), 'days');
        $this->assertSame($expected, $hours->seconds(), 'hours');
        $this->assertSame($expected, $minutes->seconds(), 'minutes');
        $this->assertSame($expected, $seconds->seconds(), 'seconds');
        $this->assertSame($expected, $milliseconds->seconds(), 'milliseconds');
        $this->assertSame($expected, $microseconds->seconds(), 'microseconds');
    }
    
    public function testMinutes()
    {
        $expected = 20160.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->minutes(), 'weeks');
        $this->assertSame($expected, $days->minutes(), 'days');
        $this->assertSame($expected, $hours->minutes(), 'hours');
        $this->assertSame($expected, $minutes->minutes(), 'minutes');
        $this->assertSame($expected, $seconds->minutes(), 'seconds');
        $this->assertSame($expected, $milliseconds->minutes(), 'milliseconds');
        $this->assertSame($expected, $microseconds->minutes(), 'microseconds');
    }
    
    public function testHours()
    {
        $expected = 336.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->hours(), 'weeks');
        $this->assertSame($expected, $days->hours(), 'days');
        $this->assertSame($expected, $hours->hours(), 'hours');
        $this->assertSame($expected, $minutes->hours(), 'minutes');
        $this->assertSame($expected, $seconds->hours(), 'seconds');
        $this->assertSame($expected, $milliseconds->hours(), 'milliseconds');
        $this->assertSame($expected, $microseconds->hours(), 'microseconds');
    }
    
    public function testDays()
    {
        $expected = 14.0;
        $weeks = new Weeks(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->days(), 'weeks');
        $this->assertSame($expected, $days->days(), 'days');
        $this->assertSame($expected, $hours->days(), 'hours');
        $this->assertSame($expected, $minutes->days(), 'minutes');
        $this->assertSame($expected, $seconds->days(), 'seconds');
        $this->assertSame($expected, $milliseconds->days(), 'milliseconds');
        $this->assertSame($expected, $microseconds->days(), 'microseconds');
    }
    
    public function testWeeks()
    {
        $expected = 2.0;
        $weeks = Weeks::from(2);
        $days = Days::from($weeks);
        $hours = Hours::from($days);
        $minutes = Minutes::from($hours);
        $seconds = Seconds::from($minutes);
        $milliseconds = Milliseconds::from($seconds);
        $microseconds = Microseconds::from($milliseconds);
        
        $this->assertSame($expected, $weeks->weeks(), 'weeks');
        $this->assertSame($expected, $days->weeks(), 'days');
        $this->assertSame($expected, $hours->weeks(), 'hours');
        $this->assertSame($expected, $minutes->weeks(), 'minutes');
        $this->assertSame($expected, $seconds->weeks(), 'seconds');
        $this->assertSame($expected, $milliseconds->weeks(), 'milliseconds');
        $this->assertSame($expected, $microseconds->weeks(), 'microseconds');
    }
}
