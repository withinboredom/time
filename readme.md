# A really simple library for converting time

This is a simple library for interacting with time durations. You can write your code to expect seconds:

```php
function sleep(\Withinboredom\Time\AnyTime $time): void {
    \sleep($time->inSeconds());
}

sleep(\Withinboredom\Time\Minutes(5)->inSeconds());
```

## Equality

All values of the same time are always strongly equaled to each other:

```php
\Withinboredom\Time\Minutes(60) === \Withinboredom\Time\Hours(1)
```

## Utilities

There are also a few utility methods:

> ->add(AnyTime)->subtract(AnyTime): AnyTime

Add and subtract durations.

> ->toDateInterval(): DateInterval

Creates a date interval for use in other things.

## Conversions

If you need to change the conversion rates, create a new standard:

```php
class Mars implements \Withinboredom\Time\TimeAndSpaceInterface {
  /// ... fill in the blanks
}
```

This can be (mis)used to allow for very short times in unit tests (to make a week pass by in literally microseconds).

## Units

- Nanoseconds
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
like [magic numbers](https://en.wikipedia.org/wiki/Magic_number_(programming)#:~:text=Magic%20numbers%20are%20common%20in%20programs%20across%20many,have%20such%20constants%20that%20identify%20the%20contained%20data.).

> Can I convert between standards?

Not yet.

> How performant is this?

The main overhead is in autoloading and function-call overhead. Thus, if realtime performance is a concern, you might
want to stick to magic numbers.

## Developing

If you wish to create a PR or update the code here:

1. Clone the repo
2. `composer install` to install test dependencies
3. `yarn` to install git hooks for formatting
4. Open in favorite IDE.

## Code Standards

[Per](https://www.php-fig.org/per/coding-style/) coding styles are followed.
