<?php
require_once 'bootstr.php';
class Journal {
    public function getEntries($n=null)
    {
        if (isset($_SESSION[JOURNAL_KEY])) {

            $arr_values = array_slice((array)$_SESSION[JOURNAL_KEY], -$n, $n, true);
            return $arr_values;
        }
        return [];
    }

    public function setEntries($arr = []) {
        if (isset($_SESSION)) {
            $_SESSION[JOURNAL_KEY] = $arr;
        }

    }
    public function clearEntries() {
        if (isset($_SESSION[JOURNAL_KEY])) {
            $_SESSION[JOURNAL_KEY] = array ();
        }
    }

}
