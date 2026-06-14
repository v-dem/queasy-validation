<?php

namespace queasy\validation\rule;

class DateRule extends AbstractRule
{
    public function validate($value)
    {
        return empty($value)
            || preg_match('~^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$~', $value)
            || preg_match('~^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/[0-9]{4}$~', $value)
            || preg_match('~^(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])/[0-9]{4}$~', $value);

    }

    public function message()
    {
        return 'This field should be a correct date';
    }
}

