<?php

namespace queasy\validation\rule;

class EmailRule extends AbstractRule
{
    public function validate($value)
    {
        return empty($value) || is_string($value) && filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function message()
    {
        return 'This field should be correct email';
    }
}

