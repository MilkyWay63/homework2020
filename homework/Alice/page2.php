<?php
require_once "source/bootstr.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="styles/styles2.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2" id="chessboardm">
        </div>
        <div class="col-sm-8">
            <h6><a href="about.php" class="text-dark float-right my-1">About this project</a></h6>
            <br>
            <?php $names = getNames(1);

            foreach ($names as $fetch):
                ?>
            <h1 class="mt-2 text-primary">Pabandykim dar paspėlioti, <?php echo $fetch['name'];?>!</h1>
            <?php endforeach; ?>
            <h3 class="mt-5 text-primary">1. Užduotėlė</h3>
            <p>Ir vėl žodeliams nepasisekė. Šuo nukando jų galūnes. Lygiai tris paskutines raideles. Pabandyk atspėti kokią galūnę turėjo žodis.</p>
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control-plaintext text-right mr-1 h3" readonly id="words1" value="" style="width: 100px;">
                <input type="text"  id="words2" value="" style="display:none;">
                <input type="text" class="form-control mr-5" id="words3" value="" style="width: 100px;">
            </div>

            <p id="succ" class="my-2 ml-5 text-success"></p>
            <p id="unsucc" class="my-2 ml-5 text-danger"></p>
            <div class="input-group float-right mr-5" style="width: 400px;">
                <div class="mx-3">
                    <input type="image" src="https://img.icons8.com/emoji/96/000000/check-mark-emoji.png" id="test" alt="Submit" width="60" height="60">
                    <br><label class="mygtukas">Pasitikrink!</label>
                </div>
                <div>
                    <input type="image" src="https://img.icons8.com/emoji/96/000000/cat-face--v1.png" id="new" alt="Submit" width="60" height="60">
                    <br><label class="mygtukas">Kitas!</label>
                </div>
            </div>
            <br>
            <br>

            <h3 class="mt-5 text-primary">2. Užduotėlė</h3>
            <p class="h6">Pas tris brolius skiemenis atėjo 1 skiemuo svečias. Ar atspėsi koks tai skiemuo?</p>
            <div class="input-group" style="width: 550px;">
                <input type="text" class="form-control-plaintext text-right mr-1 h3" readonly id="syllable1" value="" style="width: 200px;">
                <input type="text"  id="syllable2" value="" style="display:none;">
                <input type="text" class="form-control mr-4" id="syllable3" value="" style="width: 50px;">
            </div>

            <p id="succ1" class="my-2 ml-5 text-success"></p>
            <p id="unsucc1" class="my-2 ml-5 text-danger"></p>
            <div class="input-group float-right mr-5" style="width: 400px;">
                <div class="mx-3">
                    <input type="image" src="https://img.icons8.com/emoji/96/000000/check-mark-emoji.png" id="test1" alt="Submit" width="60" height="60">
                    <br><label class="mygtukas">Pasitikrink!</label>
                </div>
                <div>
                    <input type="image" src="https://img.icons8.com/emoji/96/000000/snail-emoji.png" id="new1" alt="Submit" width="60" height="60">
                    <br><label class="mygtukas">Kitas!</label>
                </div>
            </div>
            <br>
            <div class="mt-2">
                <h3 class="mt-5 text-primary">3. Užduotėlė</h3>
                <p>Ir vėl žodeliams nepasisekė. Dingo viena žodžio raidelė. Pagalvok kokios raidelės trūksta, jei tai pirmoji žodžio raidė, rašyk didžiąja raide.</p>
                <div class="input-group" style="width: 400px;">
                    <input type="text" class="form-control-plaintext text-right mr-1 h3" readonly id="letters1" value="" style="width: 150px;">
                    <input type="text"  id="letters2" value="" style="display:none;">
                    <input type="text" class="form-control mr-5" id="letters3" value="" style="width: 100px;">
                </div>

                <p id="succ2" class="my-2 ml-5 text-success"></p>
                <p id="unsucc2" class="my-2 ml-5 text-danger"></p>
                <div class="input-group float-right mr-5" style="width: 400px;">
                    <div class="mx-3">
                        <input type="image" src="https://img.icons8.com/emoji/96/000000/check-mark-emoji.png" id="test2" alt="Submit" width="60" height="60">
                        <br><label class="mygtukas">Pasitikrink!</label>
                    </div>
                    <div>
                        <input type="image" src="https://img.icons8.com/emoji/96/000000/rabbit-emoji.png" id="new2" alt="Submit" width="60" height="60">
                        <br><label class="mygtukas">Kitas!</label>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-2" id="chessboardm1"></div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="scripts/script2.js"></script>
</body>
</html>