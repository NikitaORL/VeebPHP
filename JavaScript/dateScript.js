function kuupaevKellaaeg() {
    const now = new Date();

    const paev = now.getDate();
    const kuu = now.getMonth() + 1;  // месяцы с 0
    const aasta = now.getFullYear();
    const tunnid = now.getHours();
    const minutid = now.getMinutes().toString().padStart(2, '0');
    const sekundid = now.getSeconds().toString().padStart(2, '0');

    // Форматируем дату и время в строки
    const dateStr = `${paev}.${kuu}.${aasta}`;
    const timeStr = `${tunnid}:${minutid}:${sekundid}`;
    const dateTimeStr = `${dateStr} ${timeStr}`;

    // Вывод на страницу
    document.getElementById('dateOnly').textContent = "Kuupäev: " + dateStr;
    document.getElementById('timeOnly').textContent = "Kellaaeg: " + timeStr;
    document.getElementById('dateTime').textContent = "Kuupäev ja kellaaeg: " + dateTimeStr;

    // Вывод в консоль
    console.log("Kuupäev: " + dateStr);
    console.log("Kellaaeg: " + timeStr);
    console.log("Kuupäev ja kellaaeg: " + dateTimeStr);
}
//////////////////////////////////////////////////////////////////////// Сколько дней до днюхи
function näitaSünnipäeva() {
    const now = new Date();

    // День рождения (месяц с 0): 10 ноября
    let sunnipaev = new Date(now.getFullYear(), 9, 10);

    // Если день рождения уже прошёл в этом году, переходим на следующий год
    if (sunnipaev < now) {
        sunnipaev = new Date(now.getFullYear() + 1, 10, 10);
    }

    // Разница в миллисекундах
    const ms = sunnipaev.getTime() - now.getTime();

    // Переводим в дни и округляем в большую сторону
    const paevad = Math.ceil(ms / (1000 * 60 * 60 * 24));

    // Выводим результат в консоль
    console.log(`Minu sünnipäevani on jäänud ${paevad} päeva.`);

    // Можно вывести на страницу (если есть элемент с id="sunniTulemus")
    const tulemusElem = document.getElementById('sunniTulemus');
    if (tulemusElem) {
        tulemusElem.textContent = `Minu sünnipäevani on jäänud ${paevad} päeva.`;
    }
}
