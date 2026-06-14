<?php

namespace queasy\validation\rule;

interface RuleInterface
{
    function validate($value);

    function parameters();

    function message();
}

