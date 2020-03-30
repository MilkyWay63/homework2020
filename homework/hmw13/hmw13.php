//"Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos h3> HTML tag".
<?php
echo "<br>";
function first($a, $b,  $c) {
    return $a + $b+ $c;
}
?>
<h3>
    <?php
        echo first (...[9, 5, 6]);
     ?>
</h3>
<br>
//» Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo vietą.
<?php
echo "<br>";
    function second($a, $b) {
        return $a*$b;
}
echo second(...[2,5]);
    ?>
<br>
//» Sukurti funkciją, kuri ima 1 parametrą ir grąžiną teigiamą reikšmę. (Patikrinti tipą).
<?php
echo "<br>";
    function third ($a) {
        return abs($a);
    }
    echo third(-5);
    ?>
<br>
//Sukurti masyvus, kuriuose būtų aukščių matavimo duomenys ir juos sujungti.
<br>
<?php
$height1=[35, 37, 38];
$height2=[29, 40, 42];
$result = array_merge($height1, $height2);
print_r($result);
?>
<br>
//» Ištrinti iš masyvo elementą 3 skirtingais būdais
<br>
<?php
$array1 = ["orange", "banana", "apple", "raspberry"];
unset($array1[3]);
var_dump($array1);
echo "<br>";
$array2 = ["orange", "banana", "apple", "raspberry"];
array_splice($array2, 2, 1);
var_dump($array2);
echo "<br>";
$array3 = ["orange", "banana", "apple", "raspberry"];
$array3 = array_diff($array3, ["orange", "apple"]);
var_dump($array3);
?>
<br>
//» Sukurti masyvą, kuris aprašytų knygos duomenis.
<br>
<?php
    $book=['author'=>"Charlotte Bronte", 'title'=>"Jane Eyre", 'year'=>2001];
    echo $book['author'].", ".$book['title'].", ".$book['year'];
    ?>
<br>
//» Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas
<br>
<?php
$book=[
    'author'=>[
        "Charlotte Bronte",
        "Jane Austeen"],
    'title'=>[
        "Jane Eyre",
        "Emma",
        "Pride and Prejudice",
        "Mansfield Park"],
    'year'=>[
        2001,
        2011,
        2009]
];
echo $book['author'][1].", ".$book['title'][2].", ".$book['year'][2];
?>
<br>
//Išvesti į ekraną 10 kartų žodį 'Labas';
<br>
<?php
echo str_repeat("Hello,", 10);
?>
<br>
//» Išvesti į ekraną skaičius nuo 1 iki 10;
<br>
<?php
foreach (range(1, 10) as $number) {
    echo $number;
}
?>
<br>
//» Išvesti į ekraną skaičius nuo 10 iki 1;
<br>
<?php
foreach (range(10, 1) as $number) {
    echo $number;
}

?>
<br>
//» Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
<br>
<?php
foreach (range(1, 100, 2) as $number) {
echo $number+1;
}
?>
<br>
//» Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
<br>
<?php
$array4 = [2, 5, 6, 10];
var_dump($array4);
?>
<br>
//» Išvesti į ekraną visų masyvo elementų sumą.;
<br>
<?php
echo "sum(a) = " . array_sum($array4) . "\n";
?>
<br>
//» Išvesti į ekraną visų masyvo elementų sandaugą.;
<br>
<?php
echo "product(a) = " . array_product($array4) . "\n";
?>
<br>
//» Išvesti į ekraną kas antrą masyvo
<br>
<?php
$array5=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($array5); $i += 2)
    echo $array5[$i];
?>
<br>
//» Funkciją, kuri apsuktų masyvo elementus (iš kito galo);
<br>
<?php
$array6=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(array_reverse($array6));
?>
<br>
//Išvesti visus masyvo elementus;
<br>
<?php
print_r(array_values($array6));
?>
<br>
//» Išvesti visų masyvo elementų vidurkį;
<br>
<?php
$average=array_sum($array6) / count($array6);
echo $average;
?>
<br>
//» Padidinti kiekviena masyvo elementą vienetu;
<br>
<?php
foreach ($array6 as &$val) {
    $val += 1;
}
var_dump($array6);
?>
<br>
//» Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai 2 einančiu.)
<br>
<?php
function Fibonacci($number){
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number-1) +
            Fibonacci($number-2));
}
$number = 10;
for ($counter = 0; $counter < $number; $counter++){
    echo Fibonacci($counter),' ';
}
?>
<br>
//Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestu i ekrana. (||, while) Bonus
<br>
<?php
$die=1;
    while ($die>0) {
    $die = rand(1, 6);
    if ($die<5) {
    echo $die.", ";
       }
    else {
        echo "$die </br>";
        break;
    }
}
?>
<br>
//» Metame 2 kauliukus (arba vieną kauliuką 2 kartus). taisyklės:
//Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote. Jeigu kauliukų suma daugiau už 5 ir:
//- išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//- abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//- kitais atvejais – kauliukas metamas dar kartą.
//» Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//» Visa zaidimo eiga turėtų būti išvesta į ekraną.
<br>
<?php
$die1=1;
$die2=1;
while ($die1+$die2>0) {
    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    if ($die1+$die2 < 5) {
        echo $die1.", ".$die2." Gaila, bet pralaimėjote.";
        break;
    } elseif ($die1+$die2 == 12)  {
            echo $die1.", ".$die2." Sveikiname, laimėjote dviratį!";
            break;
    } elseif ($die1 == $die2) {
        echo $die1.", ".$die2." Sveikiname, laimėjote bilietą į kiną!";
        break;
    } else {
         continue;
            }
}
?>
