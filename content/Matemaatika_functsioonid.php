<?php

function clearVarsExcept($url, $varname){
    $url = basename($url);
    if (str_starts_with($url, '?')) {
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
?>


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
echo "<h2>Otsime kaks arvad 1-100</h2>";
$EsimineArv = "77";
$TeineArv = "33";
$SummaArv = ($EsimineArv + $TeineArv);

echo "<h3>Esimine vihje</h3>";
echo "Ruutjuur arvad on: ";
echo sqrt($EsimineArv+$TeineArv);
echo "<br>";

echo "<h3>Teine vihje</h3>";
echo "Astendamine summa 3 on: ";
echo pow($SummaArv, 3);
echo "<br>";

echo "<h3>Kolmas vihje</h3>";
echo " Summa korrutamine tulemus on: ";
echo ($EsimineArv * $TeineArv);
echo "<br>";

echo "<h3>Neljas vihje</h3>";
echo " Esimese arvu numbrite arv on kaks. Ja kui esimene arv jagada teisega, siis saadakse: ";
echo ($EsimineArv / $TeineArv);
echo "<br>";

echo "<h3>Viie vihje</h3>";
echo "Kui me esimesest tšillist teise lahutame, saame: ";
echo ($EsimineArv - $TeineArv);
echo "<br>";
echo "<h3>Sinu vastused:</h3>";
?>


    <form name="Arv1Kontroll" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <label for="linn">Sisesta esimine arv:</label>
        <input type="number" id="arv1" name="arv1" min="0" max="100">
        <input type="submit" value="Kontrolli">
    </form>

<?php
if (isset($_REQUEST["arv1"])) {
    if (strtolower($_REQUEST["arv1"]) == "77") {
        echo "Sinu vastus " . $_REQUEST["arv1"] . " on õige!";
    } else if ($_REQUEST["arv1"] < "77") {
    echo "Suurem!";
    } else if ($_REQUEST["arv1"] > "77") {
        echo "Väiksem!";
    } else {
        echo "Sinu vastus " . $_REQUEST["arv1"] . " on vale!";
    }
}
?>


    <form name="Arv2Kontroll" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <label for="linn">Sisesta teine arv:</label>
        <input type="number" id="arv2" name="arv2" min="0" max="100">
        <input type="submit" value="Kontrolli">
    </form>


<?php
if (isset($_REQUEST["arv2"])) {
    if (strtolower($_REQUEST["arv2"]) == "33") {
        echo "Sinu vastus " . $_REQUEST["arv2"] . " on õige!";
    } else if ($_REQUEST["arv2"] < "33") {
        echo "Suurem!";
    } else if ($_REQUEST["arv2"] > "33") {
        echo "Väiksem!";
    } else {
        echo "Sinu vastus " . $_REQUEST["arv2"] . " on vale!";
    }
}

?>