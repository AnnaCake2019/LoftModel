const servForm = document.forms.services;
const country = document.getElementById('Country');
const city = document.getElementById('City');
const date = document.getElementById('Date');
const meeting = document.getElementById('Meeting');
const hours = document.getElementById('Hours');
const money = document.getElementById('Money');
const answer = document.getElementById('answer');
const but = document.getElementById('but');
let arr = [];
let send;

servForm.addEventListener('submit', sendInfo);

const validFirstTwo = new RegExp(/[A-zА-яЁё]{3,20}$/);
const validHours = new RegExp(/^(\d){0,3}$/g);
const validMoney = new RegExp(/^(\d){0,7}$/g);

function sendInfo(e) {
    e.preventDefault();
    if (!validFirstTwo.test(country.value)){
         country.classList.add('error');
         document.querySelector('.answerCountry').innerHTML = 'Некорректно указана страна';
         return;
    }
    if(!validFirstTwo.test(city.value)){
        city.classList.add('error');
        document.querySelector('.answerCity').innerHTML = 'Некорректно указан город';
        return;
    }
    if(!validHours.test(hours.value)){
        hours.classList.add('error');
        document.querySelector('.answerHours').innerHTML = 'Некорректно указано время';
        return;
    }
    if(!validMoney.test(money.value)){
        money.classList.add('error');
        document.querySelector('.answerBudget').innerHTML = 'Некорректно указана сумма';
        return;
    }
    else {
        arr.push(country.value, city.value, date.value, hours.value,meeting.value, money.value)
        send = JSON.stringify(arr);
        console.log(send);
    }

}


