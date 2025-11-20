<?php
echo "<h2>Tekst Funktsioonid</h2>";
$tekst = 'PHP on skriptikeel serveripoolne';
echo "$tekst";
echo "<br>";
echo "teksti pikkus - strlen() = ".strlen($tekst). " tähemärgi","Считает сколько символов";
echo "<br>";
echo "Esimised 6 гвоздьe - substr() = ".substr($tekst, 0,6), "Счет с 1 по 6 буквы";
echo "<br>";
echo "Alates 6 tähest = ".substr($tekst, 6), "Возвращает всю строку, начиная с символа с индексом 6";
echo "<br>";
echo "Sõnade arv lauses -str_word_count() = ".str_word_count($tekst)," sõna ", "- Считает сколько слов";
echo "<br>";
echo "strtolower() - ".strtolower($tekst), " - Маленькие буквы в регистре";
echo "<br>";
echo "strtoupper() - ".strtoupper($tekst), " - Большие буквы в регистре";
echo "<br>";
echo "Iga sõna algab suure tähega - ".ucwords($tekst), " - Каждое слвово начинается с большой буквы";
echo "<br>";
echo "ucwords(strtolower($tekst)) - ".ucwords(strtolower($tekst)), " - превращает весь текст в нижний регистр и делает первую букву каждого слова заглавной";


//trim, ltrim, rtrim
echo "<br>";
$tekst2 = 'PHP on skriptikeel serveripoolne';
echo "<br>";
echo "|".$tekst2."|";
echo "<br>";
echo "trim() - Удаляет пробелы справа и слева от текста - ".trim($tekst);
echo "<br>";
echo "ltrim() - Удаляет пробелы слева от текста - ".ltrim($tekst);
echo "<br>";
echo "rtrim() - Удаляет пробелы справа от текста - ".rtrim($tekst);
echo "<br>";


echo "<h3>Tekst kui massiiv</h3>";
echo "1.täht massiivist - ".$tekst[0], " - Выводит первый символ строки , обращаясь к нему как к элементу массива - tekst[0]";
echo "<br>";
echo "5.täht massiivist - ".$tekst[4], " - Выводит пятый символ строки , обращаясь к нему как к элементу массива - tekst[4]";
echo "<br>";
//Определяет каждое слово как отдельный элемент
print_r(str_word_count($tekst, 1)); echo " - Выводит массив слов из строки";
//Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )

$syna=str_word_count($tekst, 1);
echo "<br>";
echo "massivist 3 sõna - ".$syna[2]; echo "3 слово из масива";
//Определяет, какой символ стоит в начале каждого слова
print_r(str_word_count($tekst, 2)); echo " - Выводит массив, где ключ — позиция слова в строке, а значение — само слово
пример: слово PHP начинается с позиции 0
слово on начинается с позиции 4";
//Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )

echo "<br>";
echo "<h2>Teksti asendamine - replace</h2>";
$asendus = 'JavaScript';
echo substr_replace($tekst, $asendus, 0, 3), "заменяются первые 3 символа (PHP) и вставляется слово JavaScript";
echo "<br>";
echo "<br>";


//ise vaheta serveripoolne - kliendipoolne
echo "<strong>Задание: заменить serveripoolne на kliendipoolne </strong>";
echo "<br>";
echo "<strong>Варинат мой</strong>";
echo "<br>";
$asendus2 = 'kliendipoolne';
echo substr_replace($tekst, $asendus2, 19, 33);
echo "<br>";
echo "<strong>Варинат Учителя </strong>";
echo "<br>";
$otsi=array('PHP', 'serveripoolne');
$asendav=array('JavaScript', 'kliendipoolne');

echo str_replace($otsi, $asendav, $tekst), " - Ищет в строке tekst все слова из массива otsi и заменяет их на соответствующие 
слова из массива asendav.";

echo "<br>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
//tee 5-6 tekstfunktsiooni mis aitavad aru saada milline linnanimi
//echo "<ol><li>";


//------1----------

$linnNimi = "Narva";
echo "<strong>Esimine raskus</strong>";
echo "<br>";
echo "Linna nimel on " . strlen($linnNimi) . " tähted.";
echo "<br>";
//-------2-----------
echo "<strong>Teine raskus</strong>";
echo "<br>";
echo "Esimine täht: - ". substr($linnNimi, 0,1);
echo "<br>";

//-------3-----------
echo "<strong>Kolmas raskus</strong>";
echo "<br>";
echo "Viimane täht: - ". substr($linnNimi, 4,5);
echo "<br>";
//-------4-----------
echo "<strong>Neljas raskus</strong>";
echo "<br>";
$otsi2=array('Narva');
$asendav2=array('Nskra');

echo "Siin on kolm viga гвоздь - " .str_replace($otsi2, $asendav2, $linnNimi);
echo "<br>";

//-------5-----------
echo "<strong>Viies raskus</strong>";
echo "<br>";
$otsi2=array('Narva');
$asendav2=array('Nava');

echo "Vihje - ". str_replace($otsi2, $asendav2, $linnNimi);
echo "<br>";
?>
<form name="tekstkontroll" action="textFunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if (isset($_REQUEST["linn"])) {
    if (strtolower($_REQUEST["linn"]) == "narva") {
        echo "Sinu " . $_REQUEST["linn"] . " on õige!";
    } else {
        echo "Sinu " . $_REQUEST["linn"] . " on vale!";
    }
}



