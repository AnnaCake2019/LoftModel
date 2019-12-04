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


function sendInfo(e) {
    e.preventDefault();
        arr.push(country.value, city.value, date.value, hours.value, meeting.value, money.value);
        send = JSON.stringify(arr);
        arr = [];
        console.log(send);
        servForm.reset();

        // из modelWindow
        modWin.classList.add('disNonWin');
        modWin.classList.remove('disOpeWin');
    }



