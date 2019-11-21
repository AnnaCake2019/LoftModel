const up = document.getElementById('upBlock');
console.log(up)
setTimeout(start, 100);
function start() {
    up.classList.remove('downBlock');
    up.classList.add('upBlock');
}
