const openMenu = document.getElementById('buttonOpenMenu');
const fonMenu =  document.getElementById('fonMenu');
const header = document.getElementById('HP');
let q = 0;
openMenu.addEventListener('click', open);
function open() {
    q++;
    header.classList.toggle('HeaderPhone');
    fonMenu.classList.toggle('forMenuPhoneSlip');
    fonMenu.classList.toggle('forMenuPhoneOpacity');
    if (q%2 == 0){
        fonMenu.classList.toggle('forMenuPhoneOpacity');
        fonMenu.classList.toggle('nonOpacity')
    }
    else {
        setTimeout(change, 450);
    }

}

function change() {
    fonMenu.classList.toggle('forMenuPhoneOpacity');
    fonMenu.classList.toggle('nonOpacity')
}





//joke
// setTimeout(() =>{
//     setInterval(() =>{
//         let dimon = document.getElementById('dimon');
//         let p = document.querySelector('.lox').innerHTML = "Хозяин <br/> Димона!!!";
//         dimon.classList.toggle('neLox');
//     }, 4000);
// }, 600);
