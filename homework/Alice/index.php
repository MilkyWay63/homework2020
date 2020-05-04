<?php
require_once "source/bootstr.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Oh these letters!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img src="pictures/Alice_.svg" alt="Alice">
        </div>
        <div class="col-sm-8">
            <div class="chessboard">
                <!-- 1st -->
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">Z</div>
                <div class="whity"></div>
                <div class="black">Č</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">J</div>
                <div class="black"></div>
                <!-- 2nd -->
                <div class="black">&#9817;</div>
                <div class="whity">G</div>
                <div class="black"></div>
                <div class="whity">D</div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">E</div>
                <div class="black">O</div>
                <div class="whity"></div>

                <!-- 3th -->
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">A</div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">J</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">Y</div>

                <!-- 4st -->
                <div class="black">P</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">Ū</div>
                <div class="black"></div>
                <div class="whity">G</div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">N</div>
                <div class="whity"></div>
            </div>

            <form action="page1.php" method="POST" name="myForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <label class="mygtukas">O kas tu toks?</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Mano vardas...">
                </div>
                <div>
                    <input type="image" src="https://img.icons8.com/color/96/000000/queen.png" alt="Submit" width="48" height="48">
                    <label class="mygtukas">Paspausk mane!</label>
                </div>
            </form>
            <div class="chessboard">
                <!-- 5th -->
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">M</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">H</div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black"></div>
                <!-- 6th -->
                <div class="black">F</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black">Š</div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">Į</div>
                <!-- 7th -->
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">&#9817;</div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity"></div>
                <div class="black"></div>
                <div class="whity">B</div>
                <div class="black"></div>
                <!-- 8th -->
                <div class="black">&#9814;</div>
                <div class="whity">&#9816;</div>
                <div class="black"></div>
                <div class="whity">&#9813;</div>
                <div class="black">C</div>
                <div class="whity"></div>
                <div class="black">T</div>
                <div class="whity">&#9814;</div>
                <div class="black"></div>
                <div class="whity"></div>
            </div>
        </div>

    </div>
</div>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        if (x == "") {
            alert("Parašyk savo vardą!");
            return false;
        }
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>