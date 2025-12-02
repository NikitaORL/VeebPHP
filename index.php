
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Nikita Orlenko PHP tööd</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/NavStyle.css">
    <link rel="stylesheet" href="Style/MinuRuhmStyle.css">
    <script src="JavaScript/Kalkulaator.js"></script>
    <script src="JavaScript/MinuRuhmJS.js"></script>
    <script src="JavaScript/dateScript.js"></script>


</head>
<body>
<?php
//päis
include('header.php');
?>

<?php
//nav menu
include('nav.php');
?>
<div class="flex-container">


    <div>
        <?php
        if (isset($_GET["link"])) {
            include('content/' . $_GET["link"]);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>


    <div>
        <img src="Image/bmw.webp" alt="Esimine posi auto">


        <div>
            <button id="aeg" onclick="kuupaevKellaaeg()">TÄNA</button>
            <button id="sunnipaev" onclick="näitaSünnipäeva()">Minu sünnipäevani</button>
        </div>


        <div id="dateOnly"></div>
        <div id="timeOnly"></div>
        <div id="dateTime"></div>
        <div id="sunniTulemus"></div>

    </div>

</div>
<?php
//footer
include('footer.php');
?>

</body>
</html>
