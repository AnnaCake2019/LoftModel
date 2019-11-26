const imgModel = document.getElementsByClassName('imgModel');
const contForPhoto = document.getElementById('contForPhotoModel');
const imgWindow = document.getElementById('imgWindow');
const closeImg = document.getElementById('closeImg');
const backImg = document.getElementById('backImg');
const nextImg = document.getElementById('nextImg');
const arrImg = [];
let attribute;
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
        backImg.addEventListener('click', () => {
            q--;
            if (q < 0){
                q = 5;
                attribute = arrImg[q].getAttribute('src');
                imgWindow.setAttribute('src', attribute);
            }
            attribute = arrImg[q].getAttribute('src');
            imgWindow.setAttribute('src', attribute);
        });
        nextImg.addEventListener('click', () => {
            q++;
            if (q  > 5){
                q = 0;
                attribute = arrImg[q].getAttribute('src');
                imgWindow.setAttribute('src', attribute);
            }
                attribute = arrImg[q].getAttribute('src');
                imgWindow.setAttribute('src', attribute);
        });
    }
    closeImg.addEventListener('click', (e) =>{
        closeImg.classList.add('noneCloseImg');
        backImg.classList.add('noneCloseImg');
        nextImg.classList.add('noneCloseImg');
         imgWindow.removeAttribute('src');
        contForPhoto.classList.remove('contForImg');
        document.body.style.overflow = 'auto';
        window.location.reload()

    });
}


