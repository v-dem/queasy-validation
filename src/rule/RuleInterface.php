<?php

namespace queasy\validation;

interface RuleInterface
{
    function validate($value, array $data = array());

    function getParameter();

    function getMessage();
}

