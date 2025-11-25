<?php
echo "<h2>Matemaatilised tehted</h2>";
$arv1 = 1;
$arv2 = 2;

echo "Esimine arv on $arv1, teine arv on $arv2, <br>";
echo "Liitmine tulemus - '+': ".($arv1 + $arv2)."<br>";
echo "Lahutamine tulemus - '-': ".($arv1 - $arv2)."<br>";
echo "Korrutamine tulemus - '*': ".($arv1 * $arv2)."<br>";
echo "Jagatise tulemus: - '/': ".($arv1 / $arv2)."<br>";

echo "<h3>Matemaatilised funktsioonid</h3>";
echo "Väiksem arv: ";
echo min($arv1, $arv2);
echo "<br>";
echo "Suuremm arv: ";
echo max($arv1, $arv2);
echo "<br>";
echo " round(arv) - Ümardamine täisarvani: ";
echo round($arv1);
echo "<br>";
echo " floor(arv) - Ümardab allapoole täisarvani: ";
echo  floor($arv1);
echo "<br>";
echo " rand() - Random arv: ";
echo rand();
echo "<br>";
echo "pow(arv, 2) - Astendamine ";
echo pow($arv2, 2);
echo "<br>";
echo "sqrt(arv) -  Ruutjuur";
echo sqrt($arv2);
echo "<br>";

echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
echo "Suurendamine ühe võrra: ";
$x ++; //$x = $x + 1
echo $x;
echo "<br>";

echo "Vahendamine ühe võrra: ";
$x --; //$x = $x - 1
echo $x;
echo "<br>";

$nimi = "Nikita";
$perenimi = "Orlenko";
//$nimi .=$perenimi;
echo $nimi;
echo "<br>";
$format = "Tere %s %s , teie arv on x: %d";
printf($format, $perenimi,  $nimi,  $x);

echo "<br>";
