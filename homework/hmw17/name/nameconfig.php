<?php

require_once 'namebootstr.php';

class Greetings {
    // Properties
    public $name;
    public $answer;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_answer($answer) {
        $this->answer = $answer;
    }
    function get_answer() {
        return $this->answer;
    }
}
