<?php
echo "<h2>Ajafunctsioonid</h2>";
?>

<div class="grid-container">
    <div>
        <h3>Aeg ja kuupäev</h3>
        <?php
        date_default_timezone_set('Europe/Tallinn');
        echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a><br>";
        echo "time() - aeg sekundites: " . time() . "<br>";
        echo "date() - " . date("d.m.Y G:i:s") . "<br>";
        ?>
    </div>

    <div>
        <h3>Kuupäeva formaat</h3>
        <?php
        echo "<pre>
d - päev 01..31
m - kuu 01..12
Y - aasta - neljakohaline
G - 24h formaat
i - minutid 0..59
s - sekundid 0..59
</pre>";
        ?>
    </div>

    <div>
        <h3>Tehted kuupäevaga</h3>
        <?php
        echo "+1 min: " . date("d.m.Y G:i:s", time()+60) . "<br>";
        echo "+1 tund: " . date("d.m.Y G:i:s", time()+60*60) . "<br>";
        echo "+1 päev: " . date("d.m.Y G:i:s", time()+60*60*24) . "<br>";
        ?>
    </div>

    <div>
        <h3>Kuupäeva genereerimine</h3>
        <?php
        $synd = mktime(0, 31, 28, 10, 10, 2008);
        echo "Mitu sünnipäev: " . date("d.m.Y G:i:s", $synd) . "<br>";
        ?>
    </div>

    <div>
        <h3>Kuu nimega kuupäev</h3>
        <?php
        $kuud = array(
            1 => 'Jaanuar', 2 => 'Veebruar', 3 => 'Märts', 4 => 'Aprill',
            5 => 'Mai', 6 => 'Juuni', 7 => 'Juuli', 8 => 'August',
            9 => 'September', 10 => 'Oktoober', 11 => 'November', 12 => 'Detsember'
        );

        $aasta = date('Y');
        $paev = date('d');
        $kuu = $kuud[date("n")];

        echo "Täna on: " . $paev . ". " . $kuu . " " . $aasta;
        ?>
    </div>
</div>
