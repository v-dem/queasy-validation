<?php

namespace queasy\validation;

class ValidationResult
{
    private $results;

    public function __construct(array $results)
    {
        $this->results = $results;
    }

    public function isValid()
    {
        return 0 === count($this->results);
    }

    public function results()
    {
        return $this->results;
    }
}

