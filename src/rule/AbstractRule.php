<?php

namespace queasy\validation;

abstract class AbstractRule implements RuleInterface
{
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    abstract public function validate($value, array $data = array());

    public function getParameter()
    {
        return $this->parameter;
    }

    public function getMessage()
    {
        return 'Wrong value';
    }
}

