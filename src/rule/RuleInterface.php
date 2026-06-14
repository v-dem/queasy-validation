<?php

namespace queasy\validation;

interface RuleInterface
{
    function validate($value);

    function parameters();

    function message();
}

