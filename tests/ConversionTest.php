<?php

namespace Withinboredom\Time;

use PHPUnit\Framework\TestCase;

class ConversionTest extends TestCase
{
    private const EXPECTED_WEEKS = 2.0;
    private const EXPECTED_DAYS = 14.0;
    private const EXPECTED_HOURS = 336.0;
    private const EXPECTED_MINUTES = 20160.0;
    private const EXPECTED_SECONDS = 1209600.0;
    private const EXPECTED_MILLISECONDS = 1209600000.0;
    private const EXPECTED_MICROSECONDS = 1209600000000.0;
    
    public function testMicroseconds()
    {
        $weeks = Weeks::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $days = Days::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $hours = Hours::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $minutes = Minutes::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $seconds = Seconds::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $milliseconds = Milliseconds::from(self::EXPECTED_MICROSECONDS)->microseconds();
        $microseconds = Microseconds::from(self::EXPECTED_MICROSECONDS)->microseconds();
        
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testMilliseconds()
    {
        $weeks = Weeks::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $days = Days::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $hours = Hours::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $minutes = Minutes::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $seconds = Seconds::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $milliseconds = Milliseconds::from(self::EXPECTED_MILLISECONDS)->milliseconds();
        $microseconds = Microseconds::from(self::EXPECTED_MILLISECONDS)->milliseconds();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testSeconds()
    {
        $weeks = Weeks::from(self::EXPECTED_SECONDS)->seconds();
        $days = Days::from(self::EXPECTED_SECONDS)->seconds();
        $hours = Hours::from(self::EXPECTED_SECONDS)->seconds();
        $minutes = Minutes::from(self::EXPECTED_SECONDS)->seconds();
        $seconds = Seconds::from(self::EXPECTED_SECONDS)->seconds();
        $milliseconds = Milliseconds::from(self::EXPECTED_SECONDS)->seconds();
        $microseconds = Microseconds::from(self::EXPECTED_SECONDS)->seconds();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testMinutes()
    {
        $weeks = Weeks::from(self::EXPECTED_MINUTES)->minutes();
        $days = Days::from(self::EXPECTED_MINUTES)->minutes();
        $hours = Hours::from(self::EXPECTED_MINUTES)->minutes();
        $minutes = Minutes::from(self::EXPECTED_MINUTES)->minutes();
        $seconds = Seconds::from(self::EXPECTED_MINUTES)->minutes();
        $milliseconds = Milliseconds::from(self::EXPECTED_MINUTES)->minutes();
        $microseconds = Microseconds::from(self::EXPECTED_MINUTES)->minutes();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testHours()
    {
        $weeks = Weeks::from(self::EXPECTED_HOURS)->hours();
        $days = Days::from(self::EXPECTED_HOURS)->hours();
        $hours = Hours::from(self::EXPECTED_HOURS)->hours();
        $minutes = Minutes::from(self::EXPECTED_HOURS)->hours();
        $seconds = Seconds::from(self::EXPECTED_HOURS)->hours();
        $milliseconds = Milliseconds::from(self::EXPECTED_HOURS)->hours();
        $microseconds = Microseconds::from(self::EXPECTED_HOURS)->hours();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testDays()
    {
        $weeks = Weeks::from(self::EXPECTED_DAYS)->days();
        $days = Days::from(self::EXPECTED_DAYS)->days();
        $hours = Hours::from(self::EXPECTED_DAYS)->days();
        $minutes = Minutes::from(self::EXPECTED_DAYS)->days();
        $seconds = Seconds::from(self::EXPECTED_DAYS)->days();
        $milliseconds = Milliseconds::from(self::EXPECTED_DAYS)->days();
        $microseconds = Microseconds::from(self::EXPECTED_DAYS)->days();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testWeeks()
    {
        $weeks = Weeks::from(self::EXPECTED_WEEKS)->weeks();
        $days = Days::from(self::EXPECTED_WEEKS)->weeks();
        $hours = Hours::from(self::EXPECTED_WEEKS)->weeks();
        $minutes = Minutes::from(self::EXPECTED_WEEKS)->weeks();
        $seconds = Seconds::from(self::EXPECTED_WEEKS)->weeks();
        $milliseconds = Milliseconds::from(self::EXPECTED_WEEKS)->weeks();
        $microseconds = Microseconds::from(self::EXPECTED_WEEKS)->weeks();
    
        $this->assertSame(self::EXPECTED_WEEKS, $weeks, 'weeks');
        $this->assertSame(self::EXPECTED_DAYS, $days, 'days');
        $this->assertSame(self::EXPECTED_HOURS, $hours, 'hours');
        $this->assertSame(self::EXPECTED_MINUTES, $minutes, 'minutes');
        $this->assertSame(self::EXPECTED_SECONDS, $seconds, 'seconds');
        $this->assertSame(self::EXPECTED_MILLISECONDS, $milliseconds, 'milliseconds');
        $this->assertSame(self::EXPECTED_MICROSECONDS, $microseconds, 'microseconds');
    }
    
    public function testReadable()
    {
        $expected = 300.0;
        $this->assertSame($expected, Seconds::from(5)->minutes());
    }
}
