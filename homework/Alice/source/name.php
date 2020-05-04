<?php

// $_SESSION[CALCULATIONS_KEY]
if (function_exists('getNames') == FALSE) {
    function getNames($n=null)
    {
        if (isset($_SESSION[NAME_KEY])) {

            $arr_values = array_slice((array)$_SESSION[NAME_KEY], -$n, $n, true);
            return $arr_values;
        }
        return [];
    }
}

if (function_exists('setCalculations') == FALSE) {
    function setNAMES($arr = []) {
        if (isset($_SESSION)) {
            $_SESSION[NAME_KEY] = $arr;
        };
    }
}
function clearEntries() {
    if (isset($_SESSION[JOURNAL_KEY])) {
        $_SESSION[JOURNAL_KEY] = array ();
    }
}

if(isset($_POST['name'])){
    if(empty($_POST['name'])){
        $messg="Prašau įveskite savo vardą";
    } else {
        $data = [
            'name' =>test_input( $_POST['name']),

            'date' => date("Y-m-d H:i:s"),
        ];

        // to store all form data
        $arr_data = getNames();

        // appends the array with new form data
        $arr_data[] = $data;

        setNAMES($arr_data);

        $messg="";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}