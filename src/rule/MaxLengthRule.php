<?php

namespace queasy\validation;

class MaxLengthRule extends AbstractRule
{
    public function validate($value)
    {
        return empty($value) || (strlen((string) $value) <= $this->getParameter());
    }

    public function getMessage()
    {
        return 'This field is too long';
    }
}

