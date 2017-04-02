<?php

namespace queasy\validation;

trait ValidationTrait
{

    private static function validate(array $data = array(), array $rules = null)
    {
        if (is_null($rules)) {
            $rules = self::$rules;
        }

        Validator::validate($rules, $data, __CLASS__);
    }

}

