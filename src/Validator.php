<?php

namespace queasy\validation;

use Exception;

class Validator
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function validate($key, array $formData)
    {
        if (!isset($this->config[$key])) {
            throw new Exception("Missing validator configuration for \"$key\"");
        }

        $fields = $this->config[$key];
        $results = [];
        foreach ($fields as $fieldName => $rules) {
            $formValue = $formData[$fieldName] ?? null;

            foreach ($rules as $ruleKey => $ruleParams) {
                if (is_int($ruleKey)) { // Rules with no params, $ruleParams is class name
                    $rule = new $ruleParams();
                } elseif (is_string($ruleKey)) { // $ruleKey is class name, $ruleParams is constructor arg
                    $rule = is_array($ruleParams)
                        ? new $ruleKey(...$ruleParams)
                        : new $ruleKey($ruleParams);
                } else {
                    throw new Exception("Error in validator configuration for \"$key\": $ruleKey");
                }

                if (!$rule->validate($formValue)) {
                    $results[$fieldName] = $rule->message();

                    continue;
                }
            }
        }

        return new ValidationResult($results);
    }

}

