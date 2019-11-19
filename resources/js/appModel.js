const up = document.getElementById('upBlock');
setTimeout(start, 100);
function start() {
    up.classList.remove('downBlock');
    up.classList.add('upBlock');
}
