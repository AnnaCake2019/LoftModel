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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/onlyModel.js":
/*!***********************************!*\
  !*** ./resources/js/onlyModel.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var imgModel = document.getElementsByClassName('imgModel');
var contForPhoto = document.getElementById('contForPhotoModel');
var imgWindow = document.getElementById('imgWindow');
var closeImg = document.getElementById('closeImg');
var backImg = document.getElementById('backImg');
var nextImg = document.getElementById('nextImg');
var arrImg = [];
var attribute;

for (var i = 0; i < imgModel.length; i++) {
  arrImg.push(imgModel[i]);
}

var _loop = function _loop(_q) {
  arrImg[_q].addEventListener('click', openSlider);

  function openSlider(e) {
    closeImg.classList.remove('noneCloseImg');
    backImg.classList.remove('noneCloseImg');
    nextImg.classList.remove('noneCloseImg');
    attribute = arrImg[_q].getAttribute('src');
    console.log(attribute);
    imgWindow.setAttribute('src', attribute);
    contForPhoto.classList.add('contForImg');
    document.body.style.overflow = 'hidden';
    backImg.addEventListener('click', function () {
      _q--;

      if (_q < 0) {
        _q = 5;
        attribute = arrImg[_q].getAttribute('src');
        imgWindow.setAttribute('src', attribute);
      }

      attribute = arrImg[_q].getAttribute('src');
      imgWindow.setAttribute('src', attribute);
    });
    nextImg.addEventListener('click', function () {
      _q++;

      if (_q > 5) {
        _q = 0;
        attribute = arrImg[_q].getAttribute('src');
        imgWindow.setAttribute('src', attribute);
      }

      attribute = arrImg[_q].getAttribute('src');
      imgWindow.setAttribute('src', attribute);
    });
  }

  closeImg.addEventListener('click', function (e) {
    closeImg.classList.add('noneCloseImg');
    backImg.classList.add('noneCloseImg');
    nextImg.classList.add('noneCloseImg');
    imgWindow.removeAttribute('src');
    contForPhoto.classList.remove('contForImg');
    document.body.style.overflow = 'auto';
    window.location.reload();
  });
  q = _q;
};

for (var q = 0; q < arrImg.length; q++) {
  _loop(q);
}

/***/ }),

/***/ 4:
/*!*****************************************!*\
  !*** multi ./resources/js/onlyModel.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! B:\work\OpenServer\OSPanel\domains\LoftModel\resources\js\onlyModel.js */"./resources/js/onlyModel.js");


/***/ })

/******/ });