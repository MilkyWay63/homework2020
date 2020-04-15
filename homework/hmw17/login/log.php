<?php require_once 'logbootstr.php';
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

    <title>Your login page</title>
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="container mt-5">
    <?php
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        if (empty($_POST['name']) || empty($_POST['pass'])) {
            echo 'Please enter your username and password!';
        } else {
            if ($_POST['pass'] === $_SESSION['password'] && $_POST['name'] === $_SESSION['username']) {
                echo "<div class=\"jumbotron\">
      <h1 class=\"display-4\">Hello, world!</h1>
      <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class=\"my-4\">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class=\"lead\">
        <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
      </p>
    </div>";
            } else {
                echo 'Your password or username is incorrect';

            }
        }
    }
    ?>
</div>
</body>
</html>