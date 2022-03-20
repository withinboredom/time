# A really simple library for converting time

This libary is for converting between time between units.

```php
$time = \Withinboredom\Time\Minutes::from(5);
sleep($time->seconds()); // sleep for 5*60 seconds
```

If you need to change the conversion rates, just create a new standard:

```php
class SolarTimeStandard implements \Withinboredom\Time\TimeAndSpaceInterface {
    public function microsecondsInMilliseconds(): float {
        return 1000;
    }
    
    public function millisecondsInSeconds(): float {
        return 1000;
    }
    
    public function secondsInMinutes(): float {
        return 60;
    }
    
    public function minutesInHours(): float {
        return 60;
    }
    
    public function hoursInDays(): float {
        return 24 + 4.0197E-9;
    }
    
    public function daysInWeeks(): float {
        return 7.0;
    }
}
```
