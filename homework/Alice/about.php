<?php
/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once "source\bootstr.php";



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $err = false;
    $msg = '';
    $email = '';

    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }

    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= 'Error: invalid email address provided';
        $err = true;
    }
    if (!$err) {
        //Create a new PHPMailer instance
        $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
        $mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = EMAIL;

//Password to use for SMTP authentication
        $mail->Password = PASS;

        $mail->setFrom(EMAIL, (empty($name) ? 'Contact form' : $name));
        $mail->addAddress(EMAIL);
        $mail->addReplyTo($email, $name);
        $mail->Body = "Contact form submission\n\n" . $query;
        if (!$mail->send()) {
            $msg .= 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            $msg .= 'Žinutė išsiųsta';
            unset($_POST);
        }
    }
} ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/styles2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-float">
    <div class="row">
        <div class="col-sm-2" id="chessboardm2">
        </div>
        <div class="col-sm-8">
            <img class="mx-auto d-block" src="pictures/alice2.png" style="width:300px; height:300px;" alt="Alice">
<h5 class="text-primary mt-3" style="text-indent: 30px;">Šis projektas buvo sukurtas pagelbėti vaikams, kuriems sunkiai sekasi susidraugauti su raidelėmis ir sudėtinga jas skaityti. Tikimės, kad smagios užduotėlės vaikams pagelbės kiek smagiau pasipraktikuoti skaityti. Sėkmės! </h5>
<p class="my-2" style="text-indent: 30px;">Mes esame atviri jūsų pasiūlymams, ypač lauksime logopedų pastabų ir pasiūlymų. Taip pat jei turite kokių kitų klausimų susisiekite su mumis. </p>
            <form action="" method="POST" class="mx-5">
                <div class="form-group">
                    <label for="exampleNameInput">Jūsų vardas</label>
                    <input type="text" class="form-control" name="name" id="exampleNameInput" placeholder="Vardas...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jūsų el. paštas</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Parašykite jūsų žinutę</label>
        <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
                <button class="btn btn-primary" type="submit">Siųsti</button>
</form>
        <?php if (!empty($msg)) {
                echo "<h5 class='ml-5 mt-2 text-success'>$msg</h5>";
            } ?>
        </div>
        <div class="col-sm-2" id="chessboardm3">
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
