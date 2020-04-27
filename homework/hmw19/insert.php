<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname="fullstack";
try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=fullstack", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
if(isset($_POST['add'])) {
    if(! get_magic_quotes_gpc() ) {
        $emp_name = addslashes ($_POST['emp_name']);
        $emp_surname = addslashes ($_POST['emp_surname']);
    }else {
        $emp_name = $_POST['emp_name'];
        $emp_surname = $_POST['emp_surname'];
    }

    $emp_salary = $_POST['emp_salary'];

    $stmt = $conn->prepare("INSERT INTO employees (ename, surname, salary) VALUES (:ename, :surname, :salary)");
    $stmt->bindParam(':ename', $ename);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':salary', $salary);

// insert a row
    $ename = $emp_name;
    $surname = $emp_surname;
    $salary= $emp_salary;
    $stmt->execute();


    if(!$stmt ) {
        die("PDOStatement->errorCode()");
    }

    echo ". Entered data successfully\n";


    $sql = 'SELECT id, ename, surname, salary FROM employees WHERE salary>=500';
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        echo "<table class='table m-5' style='width:800px;'><tr><th>ID</th><th>Full name</th><th>Salary</th></tr>";
        // output data of each row
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["ename"]." ".$row["surname"]."</td><td>".$row['salary']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}else {

exit;}


$conn = null;
?>
<br>
<form action="sql.php" method="POST">
    <button type="submit" value="Add new employee"
            class="btn btn-primary ml-5"   name="Submit" id="frm1_submit">Add new employee</button>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>