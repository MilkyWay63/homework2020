<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
// define variables and set to empty values
$emailErr = $pswErr1 = $pswErr2 = "";
$email = $password1 = $password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["psw1"])) {
        $pswErr1 = "Password is required";
    }  elseif ($_POST["psw1"] != $_POST["psw2"]) {
        $pswErr2 = "Don't match";
    }
    else {
        $password1 = test_input($_POST["psw1"]);
    }

    if (empty($_POST["psw2"])) {
        $pswErr2 = "Password is required";
    } elseif ($_POST["psw1"] != $_POST["psw2"]) {
        $pswErr2 = "Don't match";
    } else {
        $password2 = test_input($_POST["psw2"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="exampleInputEmail1">Email address</label>
    <br>
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <label for="exampleInputPassword1">Password</label>
    <br>
    <input type="password" name="psw1">
    <span class="error">* <?php echo $pswErr1;?></span>
    <br><br>
    <label for="exampleInputPassword1">Repeat your password</label>
    <br>
    <input type="password" name="psw2">
    <span class="error">*<?php echo $pswErr2;?></span>
    <br><br>
    <button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
</form>
<br>

<?php
echo "<h3>Your Input:</h3>";
echo $email;
echo "<br>";
echo $password1;
echo "<br>";
echo $password2;
?>