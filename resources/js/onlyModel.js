const imgModel = document.getElementsByClassName('imgModel');
const contForPhoto = document.getElementById('contForPhotoModel');
const imgWindow = document.getElementById('imgWindow');
const closeImg = document.getElementById('closeImg');
const backImg = document.getElementById('backImg');
const nextImg = document.getElementById('nextImg');
const arrImg = [];
let attribute;
let hereAtr;
for (let i = 0; i < imgModel.length; i++){
    arrImg.push(imgModel[i]);
}


for (let q = 0; q < arrImg.length; q++){
    arrImg[q].addEventListener('click', openSlider);


    function openSlider(e) {
        closeImg.classList.remove('noneCloseImg');
        backImg.classList.remove('noneCloseImg');
        nextImg.classList.remove('noneCloseImg');

        attribute = arrImg[q].getAttribute('src');
        console.log(attribute);
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

const atr = (arr) =>{
    for (let i = 0; i < arr.length; i++){
        console.log(arr[i].getAttribute('src'))
    }
};

atr(arrImg);

