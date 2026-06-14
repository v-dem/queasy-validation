<?php

namespace queasy\validation;

require_once 'AbstractRule.php';

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

