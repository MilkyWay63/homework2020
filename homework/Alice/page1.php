<?php
require_once "source/bootstr.php";

?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="styles/styles1.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Someone erased letters's halves! </title>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2" id="chessboardm">
            </div>

            <div class="col-sm-8">
                <h6><a href="about.php" class="text-dark float-right">About this project</a></h6>
                <br>
                <?php $names = getNames(1);

                foreach ($names as $fetch):
                    ?>
                <h1 class="mt-2 text-primary">Sveiki, <?php echo $fetch['name'];?> </h1>
                <?php endforeach; ?>
                <br>
                <p>Oi, kažkas nutrynė žodelių puses. Pabandyk atspėti kas tai per žodis! Jei žodį atspėsi teisingai, atsiras smagus paveikslėlis. Sėkmės!</p>
                <div id="image" style="background-size: cover; background-image: url('pictures/rabbit1.png'); width: 100%"></div>
                <div id="inputs" style="display:block;">
                    <div class="pract1">
                        <input type="text" readonly id="words" value="">
                    </div>
                    <div >
                    <label>Koks tai žodis? Pradėk didžiaja raide!</label>
                    <br>
                    <input type="text" class="border m-1" id="answer" value="" style="width: 300px; height: 40px;">
                        <p id="succ0" class="my-2 ml-5 text-success"></p>
                        <p id="unsucc0" class="my-2 ml-5 text-danger"></p>
                    <button type="submit" class="btn btn-primary" id="test">Pasitikrink!</button>
                    <button type="submit" class="btn btn-success ml-1" id="new">Kitas!</button>
                    </div>
                </div>
                <div style="display: none;" id="link" class="float-right">
                    <label class="label1">Keliaujam toliau?</label>
                    <a href="page2.php" role="button"><img src="https://img.icons8.com/plasticine/100/000000/arrow.png"/></a>
                </div>
            </div>
            <div class="col-sm-2" id="chessboardm">
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="scripts/script.js"></script>

    </body>
    </html>