<?php
define('ROOT_PATH', dirname(__FILE__));

session_save_path(ROOT_PATH . '/sessions');

session_start();
date_default_timezone_set('Europe/Vilnius');

define('JOURNAL_KEY', 'entries');
require_once ROOT_PATH . '/functions.php';