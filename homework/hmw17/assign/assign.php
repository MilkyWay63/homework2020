<?php
require_once 'bootstr.php';

$assign = new Assignment();
$assign->set_type("text");
$assign->set_value("Your name here");
$assign->set_class("form-control");

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
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label>Some text here</label>
            <input value="<?php echo $assign->get_value(); ?>" class="<?php echo $assign->get_class(); ?>"
                   type="<?php echo $assign->get_type(); ?>" readonly>
        </div>
        <button type="submit" id="demo" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>