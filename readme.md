# A really simple library for converting time

This libary is for converting between time between units.

```php
// sleep for 300 seconds
sleep(\Withinboredom\Time\Seconds::from(5)->minutes())
```

or

```php
sleep((new \Withinboredom\Time\Minutes(5))->inSeconds())
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

## Units

- Microseconds
- Milliseconds
- Minutes
- Hours
- Days
- Weeks

## FAQ

> Why not months/years?

There's no set days in a month/year, so it's better to use `DateInterval` for those types of measures.

> Why does this exist?

I don't like [magic numbers](https://en.wikipedia.org/wiki/Magic_number_(programming)#:~:text=Magic%20numbers%20are%20common%20in%20programs%20across%20many,have%20such%20constants%20that%20identify%20the%20contained%20data.).
