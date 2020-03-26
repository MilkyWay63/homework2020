//Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
<?php $array1=array("a", "b", "c");
echo var_dump($array1);?>
//Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
<?php var_dump($array1 [0]);
var_dump($array1[1]);
var_dump($array1[2]);
?>
//Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
<br>
<?php $array2=array("a", "b", "c", "d");
echo $array2[0]."+".$array2[1].", ". $array2[2]."+".$array2[3].";";
?>
<br>
//Sukurkite masyvą su elementais 2, 5, 3, 9. Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
<?php $array3=array(2, 5, 3, 9);
$kint = ($array3[0]*$array3[1])+($array3[2]*$array3[3]);
echo $kint
    ?>
<br>
//Objektai (asociaciniai masyvai)
<br>
//Sukurkite objektą a = 1, b = 2, c = 3. Parodykite elemento c reikšmę dviem būdais: per skliaustelius ir kaip objekto savybę.
<br>
<?php $array4=array(
    "a"=>1,
    "b"=>2,
    "c"=>3
);
echo $array4 ["c"];
?>
<br>
//Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (pirmadienis - pirmasis ir t.t.). Parodykite dabartinę savaitės dieną.
<br>
<?php $array5=array(
    1=>"pirmadienis",
    2=>"antradienis",
    3=>"trečiadienis",
    4=>"ketvirtadienis",
    5=>"penktadienis",
    6=>"šeštadienis",
    7=>"sekmadienis"
);
    echo $array5[4];
?>
<br>
//Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. Atspausdinkite savaitės dieną naudojant sita kintamajį.
<br>
<?php $today=getdate(date("U"));
echo "$today[weekday]";
?>
<br>
//Daugialypiai masyvai
<br>
//Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
<br>
<?php $array6=array(array(1, 2, 3), array(4, 5, 6), array(7,8,9));
echo $array6[1][0];
?>
<br>
//Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. Parodykite žodį jQuery.
<br>
<?php
$js=array("jQuery", "Angular");
$php="hello";
$css="world";
$rArray = array($js, $php, $css);
echo $rArray[0][0];
?>
<br>
//Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en. Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai. Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
<br>
<?php $lt =array(
        1=>"pirmadienis",
        2=>"antradienis",
        3=>"trečiadienis",
        4=>"ketvirtadienis",
        5=>"penktadienis",
        6=>"šeštadienis",
        7=>"sekmadienis"
);

$en=array(
        1=>"Monday",
        2=>"Tuesday",
        3=>"Wednesday",
        4=>"Thursday",
        5=>"Friday",
        6=>"Saturday",
        7=>"Sunday"
);
$days=array($lt, $en);
echo $days[0][1];
echo "<br>";
echo $days[1][3];
?>
<br>
//Sukurkite kintamjį lang (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną (edited)
<br>
//Sudėkite tris skaičius ir atspausdinkite echo...kintamasis
<br>
<?php $skaiciai=1+2+3;
echo $skaiciai;
?>
<br>
//Suskaiciuoki kintamojo liekaną, print kintamasis
<br>
<?php
$sk=4;
$liekana=fmod($skaiciai, $sk);
print $liekana;
?>
<br>
//Temperaturos
<br>
<?php $temperature=array (2, 3, 4, 5, 6);
var_dump($temperature);
?>