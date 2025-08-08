<?php

class Validator
{
    private $data;
    private $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function required($field, $message = null)
    {
        if (empty($this->data[$field])) {
            $this->errors[$field][] = $message ?: "Field $field is required.";
        }
        return $this;
    }

    public function email($field, $message = null)
    {
        if (!empty($this->data[$field]) && !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = $message ?: "Invalid email format for $field.";
        }
        return $this;
    }

    public function minLength($field, $length, $message = null)
    {
        if (!empty($this->data[$field]) && mb_strlen($this->data[$field]) < $length) {
            $this->errors[$field][] = $message ?: "Field $field must have at least $length characters.";
        }
        return $this;
    }

    public function maxLength($field, $length, $message = null)
    {
        if (!empty($this->data[$field]) && mb_strlen($this->data[$field]) > $length) {
            $this->errors[$field][] = $message ?: "Field $field must have at most $length characters.";
        }
        return $this;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function passes()
    {
        return empty($this->errors);
    }
}