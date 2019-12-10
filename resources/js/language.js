const ru = document.getElementById('ru');
const en = document.getElementById('en');

const styleRu = document.getElementsByClassName('ru');
const styleEn = document.getElementsByClassName('en');

let swi;

ru.addEventListener('click', (e) =>{
    localStorage.clear();
    localStorage.setItem('ru', ru.value);
    console.log(localStorage.getItem('ru'));
    location.reload();
});

en.addEventListener('click', (e) =>{
    localStorage.clear();
    localStorage.setItem('en', en.value);
    console.log(localStorage.getItem('en'));
    location.reload();

});

if (localStorage.getItem('ru')){
    ru.setAttribute('checked', '');
    for (let i = 0 ; i < styleRu.length; i++){
        console.log(styleRu[i]);
        styleRu[i].classList.remove('ruNon');
        styleRu[i].classList.add('ruHere');
    }
    for (let i = 0 ; i < styleEn.length; i++){
        console.log(styleEn[i]);
        styleEn[i].classList.remove('enHere');
        styleEn[i].classList.add('enNon');

    }


}
if (localStorage.getItem('en')){
    en.setAttribute('checked', '')
    for (let i = 0 ; i < styleRu.length; i++){
        console.log(styleRu[i])
        styleRu[i].classList.add('ruNon');
        styleRu[i].classList.remove('ruHere');
    }
    for (let i = 0 ; i < styleEn.length; i++){
        console.log(styleEn[i])
        styleEn[i].classList.add('enHere');
        styleEn[i].classList.remove('enNon');
    }

}


