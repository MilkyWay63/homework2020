<?php
// Saving data from form in text file in JSON format

require_once 'bootstrap.php';


$error_symbol = false;
$result = false;


// check if all form data are submited, else output error message
if (isset($_POST['num_1']) && isset($_POST['num_2']) && isset($_POST['symbol'])) {
    // if form fields are empty, outputs message, else, gets their data
    if (empty($_POST['num_1']) || empty($_POST['num_2']) || empty($_POST['symbol'])) {
        $_SESSION['error'] = 'All fields are required';
    } else {
        $num_1 = (int)$_POST['num_1'];
        $num_2 = (int)$_POST['num_2'];

        switch ($_POST['symbol']) {
            case '+':
                $result = $num_1 + $num_2;
                break;

            case '-':
                $result = $num_1 - $num_2;
                break;

            case '*':
                $result = $num_1 * $num_2;
                break;

            case '/':
                $result = $num_1 / $num_2;
                break;

            case '**':
                $result = $num_1 ** $num_2;
                break;
        }
        $data = array(
            'num_1' => $_POST['num_1'],
            'num_2' => $_POST['num_2'],
            'symbol' => $_POST['symbol'],
            'result' => $result,
            'date' => date("Y-m-d H:i:s"),
        );

        // to store all form data
        $arr_data = getCalculations();

        // appends the array with new form data
        $arr_data[] = $data;

        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        // saves the json string in "formdata.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if (file_put_contents(CALCULATIONS_FILE, $jsondata)) {
            $_SESSION['error'] = 'Here you are!';
        } else {
            $_SESSION['error'] = 'Unable to save data in "calculations.txt"';
        }
    }
}

header('location: hmw16.php');

exit;


