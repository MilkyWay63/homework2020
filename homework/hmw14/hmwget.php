<html>
<body>

Plotas
<?php

if(isset($_GET['width'])&&isset($_GET['height'])){
            $A = $_GET['width'];
            $B = $_GET['height'];

            $equals = $A * $B;
    echo $equals;
}
?>
<br>

</body>
</html>