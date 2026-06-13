<?php

namespace queasy\validation;

class MinLengthRule extends AbstractRule
{
    public function validate($value)
    {
        return empty($value) || (strlen((string) $value) >= $this->getParameter());
    }

    public function getMessage()
    {
        return 'This field is too short';
    }
}

