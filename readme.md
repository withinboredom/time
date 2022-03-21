# A really simple library for converting time

This library is for converting between time between units in either a english-readable form:

```php
// sleep for 300 seconds
sleep(\Withinboredom\Time\Seconds::from(5)->minutes())

// sleep for quarter of a millisecond
usleep(\Withinboredom\Time\Microseconds::from(0.25)->milliseconds());
```

or in an OOP form:

```php
// sleep for 300 seconds 
sleep((new \Withinboredom\Time\Minutes(5))->inSeconds())

// sleep for quarter of a millisecond
usleep((new \Withinboredom\Time\Milliseconds(0.25))->inMicroseconds())
```

or in a simplified form:

```php
// sleep for 300 seconds
sleep(Minutes(5)->inSeconds());

// sleep for a quarter of a millisecond
usleep(Milliseconds(0.25)->inMicroseconds);
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

This can be (mis)used to allow for very short times in unit tests (to make a week pass by in literally microseconds).

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

I don't
like [magic numbers](https://en.wikipedia.org/wiki/Magic_number_(programming)#:~:text=Magic%20numbers%20are%20common%20in%20programs%20across%20many,have%20such%20constants%20that%20identify%20the%20contained%20data.)
.

> Can I convert between standards?

Not yet.

> How performant is this?

The main overhead is in autoloading and function-call overhead. Thus, if realtime performance is a concern, you might
want to stick to magic numbers.
