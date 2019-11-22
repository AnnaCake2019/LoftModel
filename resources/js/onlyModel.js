const imgModel = document.getElementsByClassName('imgModel');
const contForPhoto = document.getElementById('contForPhotoModel');
const imgWindow = document.getElementById('imgWindow');
const arrImg = [];
for (let i = 0; i < imgModel.length; i++){
    arrImg.push(imgModel[i].getAttribute('src'));
}
console.log(arrImg);


for (let q = 0; q < arrImg.length; q++){
    arrImg[q].addEventListener('click', openSlider);
}


function openSlider(e) {
    console.log(e);
    imgModel.setAttribute();
    // substrate.classList.add('openSubstrate');
    contForPhoto.classList.add('contForImg');
    document.body.style.overflow = 'hidden';
}

