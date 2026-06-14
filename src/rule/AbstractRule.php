<?php

namespace queasy\validation\rule;

abstract class AbstractRule implements RuleInterface
{
    private $parameters;

    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    abstract public function validate($value);

    public function parameters()
    {
        return $this->parameters;
    }

    public function message()
    {
        return 'Wrong value';
    }
}

