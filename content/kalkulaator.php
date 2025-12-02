<body>
<h1>Kalkulaator!!!</h1>

<table>
    <tr>
        <td>
            <div id="kalkulaator">
                <input type="radio" id="hleb" name="toode" value="hleb" onchange="Pilt()">
                <label for="hleb">Võileib - 0.60€</label><br>

                <input type="radio" id="moloko" name="toode" value="moloko" onchange="Pilt()">
                <label for="moloko">Piim - 1.20€</label><br>

                <input type="radio" id="riba" name="toode" value="riba" onchange="Pilt()">
                <label for="riba">Kala - 16.00€</label><br>

                <input type="radio" id="potato" name="toode" value="potato" onchange="Pilt()">
                <label for="potato">Kartul - 0.19€</label><br>

                <input type="radio" id="arbuz" name="toode" value="arbuz" onchange="Pilt()">
                <label for="arbuz">Arbuus - 0.89€</label><br>

                <br>
                <label for="kogus">Kogus:</label>
                <input type="number" id="kogus" value="1" min="1" max="10" onchange="Pilt()">
            </div>
        </td>

        <td>
            <img src="" alt="" id="pilt" width="200"><br>
            <div id="summa"></div>
        </td>


    </tr>

    <tr>
        <td>
            Kas te hakkate klent kaart?<br>
            <input type="radio" id="jah" name="kaart" value="kaart" onchange="SoodusSumma()">
            <label for="jah">Jah</label><br>

            <input type="radio" id="ei" name="kaart" value="ei" onchange="SoodusSumma()">
            <label for="ei">Ei</label><br>
        </td>

        <td>
            <div id="soodusSumma"></div>
        </td>


    </tr>
</table>

</body>