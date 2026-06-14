<?php

namespace queasy\validation;

class RequiredRule extends AbstractRule
{
    public function validate($value)
    {
        return !($this->parameters()
            && (is_null($value)
                || (0 === strlen((string) $value))));
    }

    public function message()
    {
        return 'This field is required';
    }
}

