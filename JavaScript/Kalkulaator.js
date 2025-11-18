function Pilt() {
    let pilt = document.getElementById("pilt");
    let kogus = document.getElementById("kogus").value;
    let summaElem = document.getElementById("summa");
    let hind = 0;
    let piltFail = "";

    if (document.getElementById("hleb").checked) {
        hind = 0.60;
        piltFail = "kalkulaatorPildid/hleb.jpg";
    } else if (document.getElementById("moloko").checked) {
        hind = 1.20;
        piltFail = "kalkulaatorPildid/moloko.png";
    } else if (document.getElementById("riba").checked) {
        hind = 16.00;
        piltFail = "kalkulaatorPildid/riba.jpg";
    } else if (document.getElementById("potato").checked) {
        hind = 0.19;
        piltFail = "kalkulaatorPildid/potato.jpg";
    } else if (document.getElementById("arbuz").checked) {
        hind = 0.89;
        piltFail = "kalkulaatorPildid/arbuz.webp";
    }


    if (hind > 0) {
        pilt.src = piltFail;
        let summa = hind * kogus;
        summaElem.textContent = "Summa =  " + summa + "€"
    } else {
        pilt.src = "";
    }
}


function SoodusSumma() {
    let summaElem = document.getElementById("summa");
    let soodusElem = document.getElementById("soodusSumma");
    let soodus = 0.85;


    let summa = parseFloat(summaElem.textContent.replace("Summa = ", "").replace("€", ""));

    if (document.getElementById("jah").checked) {
        let soodusSumma = summa * soodus
        soodusElem.textContent = "Summa koos soodustega = " + soodusSumma + " €";
    } else {
        soodusElem.textContent = "Summa = " + summa + " €";
    }
}
