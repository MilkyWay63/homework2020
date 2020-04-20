<?php
require_once 'bootstr.php';


$error_symbol = false;
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['clear'])) {
    $cl=new Journal;
    $cl->clearEntries();
}

if (isset($_POST['entry']) && isset($_POST['submit'])) {

    if (empty($_POST['entry'])) {
        $_SESSION['error'] = 'Please write something!';
    } else {
        $data = [
            'entry' => test_input($_POST['entry']),
            'date' => date("Y-m-d H:i:s"),
        ];
        $entrdata=new Journal();

        // to store all form data
        $arr_data=$entrdata->getEntries();
        // appends the array with new form data
        $arr_data[] = $data;

        $arr_data=$entrdata->setEntries($arr_data);

    }
}

header('location: index.php');

exit;