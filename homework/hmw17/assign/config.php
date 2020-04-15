<?php

require_once 'bootstr.php';

class Assignment
{
    // Properties
    public $type;
    public $value;
    public $class;

    // Methods
    function set_type($type)
    {
        $this->type = $type;
    }

    function get_type()
    {
        return $this->type;
    }

    function set_value($value)
    {
        $this->value = $value;
    }

    function get_value()
    {
        return $this->value;
    }

    function set_class($class)
    {
        $this->class = $class;
    }

    function get_class()
    {
        return $this->class;
    }
}