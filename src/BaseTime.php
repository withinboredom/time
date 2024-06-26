<?php

namespace Withinboredom\Time;

if(class_exists('\GMP', false)) {
    class BaseTime extends \GMP {}
} else {
    class BaseTime {}
}
