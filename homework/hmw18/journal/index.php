<?php
require_once 'bootstr.php';
?>
<!doctype html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml" xmlns:height="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="container mt-5">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
    <?php endif;?>
<div>
    <form action="insert.php" method="POST" class="mx-3 mt-3">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Please share your thoughts!</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="entry"></textarea>
            </div>
            <label class="col-sm-2 col-form-label">Journal entries to display</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="number">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mx-auto my-2" name="submit">Save</button>
            <button type="submit" class="btn btn-danger mx-auto my-2" name="clear">Clear</button>

        </div>
    </form>


    <?php
    $n=null;
    if (isset($_POST['number'])) {
        if (!empty($_POST['number']) && is_int($_POST['number'])) {
            $_POST['number'] = $n;
        }
    }
    $journal=new Journal();
    $entries=$journal->getEntries($n);

    foreach ($entries as $fetch):
        ?>
        <br>
        <div class="container mt-2" >
            <div class="card bg-light p-3" style="max-width: 18rem;">
                <p><?php echo $fetch ['date']; ?></p>
                <h5><span class="text-primary font-weight-bold"><?php
                        echo $fetch['entry'];?></span></h5>

            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
<?php
if (isset($_POST["clear"])) {
    $cl=new Journal;
    $cl->clearEntries();
}
unset($_SESSION['error']);
unset($_SESSION['success']);
?>

