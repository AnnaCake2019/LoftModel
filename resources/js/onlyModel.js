const imgModel = document.getElementsByClassName('imgModel');
const contForPhoto = document.getElementById('contForPhotoModel');
const imgWindow = document.getElementById('imgWindow');
const closeImg = document.getElementById('closeImg');
const backImg = document.getElementById('backImg');
const nextImg = document.getElementById('nextImg');
let arrImg = [];
const arrSrc = [];
let attribute;
for (let i = 0; i < imgModel.length; i++){
    arrImg.push(imgModel[i]);
}
for (let q = 0; q < arrImg.length; q++){
    arrSrc.push(arrImg[q].getAttribute('src'));
    arrImg[q].addEventListener('click', openSlider);
    function openSlider(e) {
        closeImg.classList.remove('noneCloseImg');
        backImg.classList.remove('noneCloseImg');
        nextImg.classList.remove('noneCloseImg');
        attribute = arrImg[q].getAttribute('src');
        imgWindow.setAttribute('src', attribute);
        contForPhoto.classList.add('contForImg');
        document.body.style.overflow = 'hidden';
    }
    closeImg.addEventListener('click', (e) =>{
        closeImg.classList.add('noneCloseImg');
        backImg.classList.add('noneCloseImg');
        nextImg.classList.add('noneCloseImg');
         imgWindow.removeAttribute('src');
        contForPhoto.classList.remove('contForImg');
        document.body.style.overflow = 'auto';
    });
}



let sumSrc;
backImg.addEventListener('click', back);
function back() {
    let atrOne = imgWindow.getAttribute('src');
    for (let s = 0; s < arrSrc.length; s++) {
        if (arrSrc[s] === atrOne) {
            if (s < 1){
                sumSrc = arrSrc.length - 1;
                imgWindow.setAttribute('src', arrSrc[s + sumSrc]);
            }
            else {
                imgWindow.setAttribute('src', arrSrc[s - 1]);
            }
        }

    }
}
nextImg.addEventListener('click', next);
function next() {
    let atrOne = imgWindow.getAttribute('src');
    for (let s = 0; s < arrSrc.length; s++) {
        if (arrSrc[s] === atrOne) {
            sumSrc = arrSrc.length - 1;
            if (s === sumSrc) {
                imgWindow.setAttribute('src', arrSrc[s - sumSrc]);
            } else {
                imgWindow.setAttribute('src', arrSrc[s + 1]);
            }
        }
    }
}



