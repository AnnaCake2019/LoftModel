/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/services.js":
/*!**********************************!*\
  !*** ./resources/js/services.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var servForm = document.forms.services;
var country = document.getElementById('Country');
var city = document.getElementById('City');
var date = document.getElementById('Date');
var meeting = document.getElementById('Meeting');
var hours = document.getElementById('Hours');
var money = document.getElementById('Money');
var answer = document.getElementById('answer');
var but = document.getElementById('but');
var valid = document.querySelectorAll('.valid');
var sendWhatsApp = document.getElementById('sendFormWhatsApp');
var arr = [];
var send;
servForm.addEventListener('submit', sendInfo);
var validFirstTwo = new RegExp(/[A-zА-яЁё]{3,20}$/);
var validHours = new RegExp(/^(\d){0,3}$/g);
var validMoney = new RegExp(/^(\d){0,7}$/g);
country.addEventListener('blur', function () {
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
city.addEventListener('blur', function () {
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
hours.addEventListener('blur', function () {
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
money.addEventListener('blur', function () {
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
arr.push(country.value, city.value, date.value, hours.value, meeting.value, money.value);

function sendInfo(e) {
  e.preventDefault();
  arr.push({
    country: country.value,
    city: city.value,
    date: date.value,
    hours: hours.value,
    meeting: meeting.value,
    money: money.value
  });
  send = JSON.stringify(arr);
  arr = [];
  console.log(send);
  sendWhatsApp.setAttribute('href', "https://wa.me/79190477597?text=".concat(send));
  console.log(sendWhatsApp);
  servForm.reset(); // из modelWindow

  modWin.classList.add('disNonWin');
  modWin.classList.remove('disOpeWin');
}

/***/ }),

/***/ 7:
/*!****************************************!*\
  !*** multi ./resources/js/services.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! B:\work\OpenServer\OSPanel\domains\LoftModel\resources\js\services.js */"./resources/js/services.js");


/***/ })

/******/ });