const servForm = document.forms.services;
const country = document.getElementById('Country');
const city = document.getElementById('City');
const date = document.getElementById('Date');
const meeting = document.getElementById('Meeting');
const hours = document.getElementById('Hours');
const money = document.getElementById('Money');
const answer = document.getElementById('answer');
const but = document.getElementById('but');
const valid = document.querySelectorAll('.valid');
const sendWhatsApp = document.getElementById('sendFormWhatsApp');

let arr = [];
let send;

servForm.addEventListener('submit', sendInfo);


const validFirstTwo = new RegExp(/[A-zА-яЁё]{3,20}$/);
const validHours = new RegExp(/^(\d){0,3}$/g);
const validMoney = new RegExp(/^(\d){0,7}$/g);


country.addEventListener('blur', () => {
    if (!validFirstTwo.test(country.value)) {
        country.classList.add('error');
        document.querySelector('.answerCountry').innerHTML = 'Некорректно указана страна<br/> Input Error';
        but.style.pointerEvents = 'none';
        return;
    } else {
        country.classList.remove('error');
        document.querySelector('.answerCountry').innerHTML = '';
        but.style.pointerEvents = 'auto';
    }
});

city.addEventListener('blur', () => {
    if (!validFirstTwo.test(city.value)) {
        city.classList.add('error');
        document.querySelector('.answerCity').innerHTML = 'Некорректно указан город<br/> Input Error';
        but.style.pointerEvents = 'none';
        return;
    } else {
        city.classList.remove('error');
        document.querySelector('.answerCity').innerHTML = '';
        but.style.pointerEvents = 'auto';
    }
});

hours.addEventListener('blur', () => {
    if (!validHours.test(hours.value)) {
        hours.classList.add('error');
        document.querySelector('.answerHours').innerHTML = 'Некорректно указано время<br/> Input Error';
        but.style.pointerEvents = 'none';
        return;
    } else {
        hours.classList.remove('error');
        document.querySelector('.answerHours').innerHTML = '';
        but.style.pointerEvents = 'auto';
    }
});

money.addEventListener('blur', () => {
    if (!validMoney.test(money.value)) {
        money.classList.add('error');
        document.querySelector('.answerBudget').innerHTML = 'Некорректно указана сумма<br/> Input Error';
        but.style.pointerEvents = 'none';
        return;
    } else {
        money.classList.remove('error');
        document.querySelector('.answerBudget').innerHTML = '';
        but.style.pointerEvents = 'auto';
    }
});

// arr.push(country.value, city.value, date.value, hours.value, meeting.value, money.value);


function sendInfo(e) {
    e.preventDefault();
    arr.push( {
        country : country.value,
        city : city.value,
        date : date.value,
        hours : hours.value,
        meeting : meeting.value,
        money :money.value
    });

    send = JSON.stringify(arr);
    arr = [];
    console.log(send);
    // sendWhatsApp.setAttribute('href', "https://wa.me/79190477597?text=".concat(country.value));
    location.href= `https://wa.me/79190477597?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%BD%D0%B5%D0%BE%D0%B1%D1%85%D0%BE%D0%B4%D0%B8%D0%BC%D0%B0%20%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C%20%D0%BF%D0%BE%20%D1%81%D0%BB%D0%B5%D0%B4%D1%83%D1%8E%D1%89%D0%B8%D0%BC%20%D0%BF%D0%B0%D1%80%D0%B0%D0%BC%D0%B5%D1%82%D1%80%D0%B0%D0%BC:%0A%0A
    %D0%A1%D1%82%D1%80%D0%B0%D0%BD%D0%B0:%20${country.value}%0A
    %D0%93%D0%BE%D1%80%D0%BE%D0%B4:%20${city.value}%0A
    %D0%94%D0%B0%D1%82%D0%B0:%20${date.value}%0A
    %D0%92%D1%80%D0%B5%D0%BC%D1%8F%20(%D0%B2%20%D1%87%D0%B0%D1%81%D0%B0%D1%85):%20${hours.value}%0A
    %D0%9C%D0%B5%D1%81%D1%82%D0%BE%20%D0%B2%D1%81%D1%82%D1%80%D0%B5%D1%87%D0%B8:%20${meeting.value}%0A
    %D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%20(%D0%B2%20$):%20${money.value}`;
    console.log(sendWhatsApp);
    servForm.reset();

    // из modelWindow
    modWin.classList.add('disNonWin');
    modWin.classList.remove('disOpeWin');
}
