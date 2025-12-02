<form method="post" action="">
    <select name="pildid">
        <option value="">Vali pilt</option>
        <?php
        // Путь к папке с картинками относительно этого файла
        $kataloog = '/../pildid';
        if ($asukoht = opendir($kataloog)) {
            while($rida = readdir($asukoht)){
                if($rida != '.' && $rida != '..'){
                    echo "<option value='$rida'>$rida</option>\n";
                }
            }
            closedir($asukoht);
        }
        ?>
    </select>
    <input type="submit" value="Vaata">
</form>

<?php
if(!empty($_POST['pildid'])){
    $pilt = $_POST['pildid'];
    $pildi_aadress = '../../pildid/'.$pilt; // путь к картинке

    // Получаем данные изображения
    $pildi_andmed = getimagesize($pildi_aadress);
    $laius = $pildi_andmed[0];
    $korgus = $pildi_andmed[1];
    $formaat = $pildi_andmed[2];

    echo '<h3>Originaal pildi andmed</h3>';
    echo "Laius: $laius<br>";
    echo "Kõrgus: $korgus<br>";
    echo "Formaat: $formaat<br>";

    // Максимальные размеры миниатюры
    $max_laius = 120;
    $max_korgus = 90;

    // Вычисляем коэффициент масштабирования
    if($laius <= $max_laius && $korgus <= $max_korgus){
        $ratio = 1;
    } elseif($laius > $korgus){
        $ratio = $max_laius / $laius;
    } else {
        $ratio = $max_korgus / $korgus;
    }

    // Новые размеры
    $pisi_laius = round($laius * $ratio);
    $pisi_korgus = round($korgus * $ratio);

    echo '<h3>Uue pildi andmed</h3>';
    echo "Arvutamise suhe: $ratio <br>";
    echo "Laius: $pisi_laius<br>";
    echo "Kõrgus: $pisi_korgus<br>";

    // Показываем уменьшенную картинку
    echo "<img width='$pisi_laius' height='$pisi_korgus' src='$pildi_aadress'><br>";
}
?>
