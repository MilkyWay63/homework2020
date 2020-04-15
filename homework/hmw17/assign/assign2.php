<?php
$type;
$class;
$placeholder;
function input($type = "text", $placeholder = "Name", $class = "form-control")
{
    return sprintf("<input type=“%s” class=“%s” placeholder=“%s”>", $type, $class, $placeholder);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container mt-5">
    <?php
    echo input('text', "Email", "form-control");
    echo "<br>";
    echo input("text", "username", "form-control form-control-lg");
    ?>
</div>
</body>
</html>
