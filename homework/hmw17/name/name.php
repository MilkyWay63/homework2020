<?php require_once 'namebootstr.php';
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

    <title>What is your name?</title>
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Please enter your name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="test" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ready to talk? </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="container mt-5"> <?php
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            echo 'Please enter you name!';
        } else {
            if (isset($_POST['test'])) {
                $username = new Greetings();
                $username->set_name($_POST['name']);
                $username->set_answer('Great to see you, ');
                echo $username->get_answer();
                echo $username->get_name() . "!";

            } else {
                $nousername = new Greetings;
                $nousername->set_name($_POST['name']);
                $nousername->set_answer('Goodbye, ');
                echo $nousername->get_answer();
                echo $nousername->get_name() . "!";
            }
        }
    }
    ?>
</div>
</body>
</html>