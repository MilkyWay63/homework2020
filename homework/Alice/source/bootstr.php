<?php
define('ROOT_PATH', dirname(__FILE__));
session_save_path(ROOT_PATH . '/sessions');

define('NAME_KEY', 'names');

session_start();

require_once ROOT_PATH . '/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';

require_once ROOT_PATH . '/PHPMailer-master/PHPMailer-master/src/SMTP.php';

require_once ROOT_PATH . '/PHPMailer-master/PHPMailer-master/src/Exception.php';
require_once ROOT_PATH . '/PHPMailer-master/PHPMailer-master/src/POP3.php';
require_once ROOT_PATH . '/PHPMailer-master/PHPMailer-master/src/OAuth.php';
require_once ROOT_PATH . '/credentials.php';
require_once ROOT_PATH . '/name.php';
