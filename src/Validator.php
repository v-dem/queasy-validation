<?php

namespace queasy\validation;

use queasy\validation\rule\{Required, MaxLength, MinLength, Email};

class Validator
{
    private $rules;

    private $config;

    public function __construct($config)
    {
        $this->config = $config;

        $this->rules = [
            'required'  => Required::class,
            'maxlength' => MaxLength::class,
            'minlength' => MinLength::class,
            'email'     => Email::class
        ];
    }

    public function registerRule($name, $class)
    {
        $this->rules[$name] = $class;
    }

    public function validate($key, array $data)
    {
        if (!isset($this->config[$key])) {
            throw new Exception("Missing validator configuration for \"$key\"");
        }

        $fields = $this->config[$key];
        foreach ($fields as $field => $value) {
            
        }
/*
        $messagesMap = array();
        foreach ($rules as $fieldName => $fieldRules) {
            foreach ($fieldRules as $ruleName => $ruleParameter) {
                $ruleClassName = sprintf(self::RULE_CLASS_TEMPLATE, ucfirst($ruleName));

                try {
                    $rule = new $ruleClassName($ruleParameter);
                } catch (ClassNotFoundException $e) {
                    throw new SystemException(sprintf('Unknown rule "%s" - can\'t locate class "%s".', $ruleName, $ruleClassName));
                }

                if (!$rule->validate(isset($data[$fieldName])? $data[$fieldName]: null)) {
                    $vars = array(
                        'field' => $fieldName,
                        'parameter' => $ruleParameter
                    );

                    $message = sprintf(self::MESSAGE_CODE_TEMPLATE, $prefix, $fieldName, $ruleName);
                    $transMessage = self::trans($message, $vars);
                    if ($message === $transMessage) {
                        $message = sprintf(self::MESSAGE_CODE_TEMPLATE, __CLASS__, 'default', $ruleName);
                    }

                    $transMessage = self::trans($message, $vars);

                    if (!isset($messagesMap[$fieldName])) {
                        $messagesMap[$fieldName] = array();
                    }

                    $messagesMap[$fieldName][] = $transMessage;
                }
            }
        }

        if (count($messagesMap)) {
            throw new ValidationException($messagesMap);
        }
*/
    }

}

