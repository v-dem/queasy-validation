<?php

namespace queasy\validation;

interface RuleInterface
{
    function validate($value, array $data = array());

    function parameters();

    function message();
}

