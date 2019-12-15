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
var money = document.getElementById('Money');
var answer = document.getElementById('answer');
var but = document.getElementById('but');
var sendWhatsApp = document.getElementById('sendFormWhatsApp');
var allError = document.getElementById('allError');
var arr = [];
var send;
servForm.addEventListener('submit', sendInfo);
var validFirstTwo = new RegExp(/[A-zА-яЁё]{3,20}$/);
var validMoney = new RegExp(/^(\d){0,7}$/g);
country.addEventListener('blur', function () {
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
city.addEventListener('blur', function () {
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
money.addEventListener('change', function () {
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
  } else {
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
    location.href = "https://wa.me/79516864336?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%BD%D0%B5%D0%BE%D0%B1%D1%85%D0%BE%D0%B4%D0%B8%D0%BC%D0%B0%20%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C%20%D0%BF%D0%BE%20%D1%81%D0%BB%D0%B5%D0%B4%D1%83%D1%8E%D1%89%D0%B8%D0%BC%20%D0%BF%D0%B0%D1%80%D0%B0%D0%BC%D0%B5%D1%82%D1%80%D0%B0%D0%BC:%0A%0A\n    %D0%A1%D1%82%D1%80%D0%B0%D0%BD%D0%B0:%20".concat(country.value, "%0A\n    %D0%93%D0%BE%D1%80%D0%BE%D0%B4:%20").concat(city.value, "%0A\n    %D0%94%D0%B0%D1%82%D0%B0:%20").concat(date.value, "%0A\n    %D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%20(%D0%B2%20$):%20").concat(money.value);
    console.log(sendWhatsApp);
    servForm.reset(); // из modelWindow

    modWin.classList.add('disNonWin');
    modWin.classList.remove('disOpeWin');
  }
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
