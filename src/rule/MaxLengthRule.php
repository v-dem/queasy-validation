<?php

namespace queasy\validation\rule;

class MaxLengthRule extends AbstractRule
{
    public function validate($value)
    {
        return empty($value) || (strlen((string) $value) <= $this->parameters());
    }

    public function message()
    {
        return 'This field is too long';
    }
}

