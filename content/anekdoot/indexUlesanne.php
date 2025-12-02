<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Värske teade</title>
    <link rel="stylesheet" href="StyleAnekdoot.css">


</head>
<body>
<?php
//päis
include('headerUlesanne.php');
?>
<h1 id="h1Mobil">Värske teade</h1>

<div class="MessageTxt">
    <?php
    require "message.txt";
    ?>
    </div>

<div class="AutorTxt">
    <?php
    require "author.txt";
    ?>
</div>

<div class="footerUlesanne">
<?php
//päis
include('footerUlesanne.php');
?>
</div>

</body>
</html>
