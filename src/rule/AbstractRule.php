<?php

namespace queasy\validation;

abstract class AbstractRule implements RuleInterface
{
    private $parameters;

    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    abstract public function validate($value, array $data = array());

    public function parameters()
    {
        return $this->parameters;
    }

    public function message()
    {
        return 'Wrong value';
    }
}

