const servForm = document.forms.services;
const country = document.getElementById('Country');
const city = document.getElementById('City');
const date = document.getElementById('Date');
const money = document.getElementById('Money');
const answer = document.getElementById('answer');
const but = document.getElementById('but');
const sendWhatsApp = document.getElementById('sendFormWhatsApp');
const allError = document.getElementById('allError');

let arr = [];
let send;

servForm.addEventListener('submit', sendInfo);



const validFirstTwo = new RegExp(/[A-zА-яЁё]{3,20}$/);
const validMoney = new RegExp(/^(\d){0,7}$/g);



country.addEventListener('blur', () => {
    if (!validFirstTwo.test(country.value)) {
        country.style.border = '2px red solid';
        but.style.pointerEvents = 'none';
        allError.innerHTML = 'Форма заполнены не корректно<br/>The form is not filled out correctly';
        return;
    } else {
        country.style.border = '1px black solid';
        but.style.pointerEvents = 'auto';
    }
});

city.addEventListener('blur', () => {
    if (!validFirstTwo.test(city.value)) {
        city.style.border = '2px red solid';
        allError.innerHTML = 'Форма заполнены не корректно<br/>The form is not filled out correctly';
        but.style.pointerEvents = 'none';
        return;
    } else {
        city.style.border = '1px black solid';
        allError.innerHTML = '';
        but.style.pointerEvents = 'auto';
    }
});

money.addEventListener('change', () => {
    if (!validMoney.test(money.value)) {
        money.style.border = '2px red solid';
        allError.innerHTML = 'Форма заполнены не корректно<br/>The form is not filled out correctly';
        but.style.pointerEvents = 'none';
        return;
    } else {
        money.style.border = '1px black solid';
        but.style.pointerEvents = 'auto';
    }
});










function sendInfo(e) {
    e.preventDefault();
    if (!validFirstTwo.test(country.value)) {
        country.style.border = '2px red solid';
        but.style.pointerEvents = 'none';
        allError.innerHTML = 'Форма заполнены не корректно<br/>The form is not filled out correctly';
        return;
    }
    if (!validFirstTwo.test(city.value)) {
        city.style.border = '2px red solid';
        allError.innerHTML = 'Форма заполнены не корректно<br/>The form is not filled out correctly';
        but.style.pointerEvents = 'none';
        return;
    }else {
        allError.innerHTML = 'Можно отправить';
        but.style.pointerEvents = 'auto';

        arr.push({
            country: country.value,
            city: city.value,
            date: date.value,
            money: money.value
        });

        send = JSON.stringify(arr);
        arr = [];
        console.log(send);
        location.href = `https://wa.me/79190477597?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%BD%D0%B5%D0%BE%D0%B1%D1%85%D0%BE%D0%B4%D0%B8%D0%BC%D0%B0%20%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C%20%D0%BF%D0%BE%20%D1%81%D0%BB%D0%B5%D0%B4%D1%83%D1%8E%D1%89%D0%B8%D0%BC%20%D0%BF%D0%B0%D1%80%D0%B0%D0%BC%D0%B5%D1%82%D1%80%D0%B0%D0%BC:%0A%0A
    %D0%A1%D1%82%D1%80%D0%B0%D0%BD%D0%B0:%20${country.value}%0A
    %D0%93%D0%BE%D1%80%D0%BE%D0%B4:%20${city.value}%0A
    %D0%94%D0%B0%D1%82%D0%B0:%20${date.value}%0A
    %D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%20(%D0%B2%20$):%20${money.value}`;
        console.log(sendWhatsApp);
        servForm.reset();

        // из modelWindow
        modWin.classList.add('disNonWin');
        modWin.classList.remove('disOpeWin');
    }
}
