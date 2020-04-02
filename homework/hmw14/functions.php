<?php
function numpat($n)
{
    $num = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $num . " ";
        }

        $num = $num + 1;

        echo "<br>";
    }
}

$n = 9;
numpat($n);
echo "<br>";

function toCamelCase($value){
    $value=ucwords(str_replace(array('_', '-'), ' ', $value));
    $value=str_replace(' ', '', $value);
    return lcfirst($value);
}
$string='my_name';
echo toCamelCase($string);
echo "<br>";

  function getStarSign($date="")
  {
    $zodiac[356] = "Capricorn";
    $zodiac[326] = "Sagittarius";
    $zodiac[296] = "Scorpio";
    $zodiac[266] = "Libra";
    $zodiac[235] = "Virgo";
    $zodiac[203] = "Leo";
    $zodiac[172] = "Cancer";
    $zodiac[140] = "Gemini";
    $zodiac[111] = "Taurus";
    $zodiac[78]  = "Aries";
    $zodiac[51]  = "Pisces";
    $zodiac[20]  = "Aquarius";
    $zodiac[0]   = "Capricorn";
    if (!$date) $date = time();
    $dayOfTheYear = date("z",$date);
    $isLeapYear = date("L",$date);
    if ($isLeapYear && ($dayOfTheYear > 59)) $dayOfTheYear = $dayOfTheYear - 1;
    foreach($zodiac as $day => $sign) if ($dayOfTheYear > $day) break;
    return $sign;
  }
$sign = getStarSign(strtotime("2014-12-31"));
  echo $sign;
  echo "<br>";
//???????????
$array = array();

for ($i = 1; $i < 4; ++$i) {
    for ($j = 1; $j <= $i; $j++) {
    }
    $array[] =$i;
}

print_r($array);

