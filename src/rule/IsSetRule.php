<?php

namespace queasy\validation;

class IsSetRule extends AbstractRule
{
    public function validate($value)
    {
        return !is_null($value);
    }

    public function message()
    {
        return 'This field is required';
    }
}

