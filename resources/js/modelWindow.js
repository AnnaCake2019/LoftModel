const buttonOW = document.getElementById('buttonOW');
const modWin = document.getElementById('modWin');
const serv = document.getElementById('serv');

buttonOW.addEventListener('click', workWindow);

function workWindow(e) {
    modWin.classList.remove('disNonWin');
    modWin.classList.add('disOpeWin');
}


setTimeout(servUP, 100);

function servUP() {
    serv.classList.remove('servDown');
    serv.classList.add('servUp');
}
