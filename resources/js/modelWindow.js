const serv = document.getElementById('serv');
setTimeout(servUP, 100);
function servUP() {
    serv.classList.remove('servDown');
    serv.classList.add('servUp');
}

const linkOW = document.getElementById('linkOW');
const buttonOW = document.getElementById('buttonOW');
const modWin = document.getElementById('modWin');
const closeModel = document.getElementById('closeServerWin');
buttonOW.addEventListener('click', butWindow);
linkOW.addEventListener('click', butWindow);
closeModel.addEventListener('click', closeMW);

function butWindow() {
    modWin.classList.remove('disNonWin');
    modWin.classList.add('disOpeWin');
}

function closeMW() {
   modWin.classList.add('disNonWin');
   modWin.classList.remove('disOpeWin');
}

