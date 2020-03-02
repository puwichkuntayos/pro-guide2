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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 31);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__domUtils_js__ = __webpack_require__(4);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["a"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "b", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["b"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "d", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["c"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "e", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["d"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "g", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["f"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "j", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["g"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "v", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["h"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "B", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["i"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "C", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["j"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "D", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["k"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "H", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["l"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "J", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["m"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "M", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["n"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "O", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["o"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "P", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["p"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "Q", function() { return __WEBPACK_IMPORTED_MODULE_0__domUtils_js__["r"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__init_js__ = __webpack_require__(35);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "E", function() { return __WEBPACK_IMPORTED_MODULE_1__init_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__getters_js__ = __webpack_require__(5);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "f", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["a"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "h", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["b"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "i", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["c"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "k", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["d"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "l", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["e"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "m", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["f"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "n", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["g"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "o", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["h"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "p", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["i"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "q", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["j"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "r", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["k"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "s", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["l"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "t", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["m"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "u", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["n"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "w", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["o"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "x", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["p"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "y", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["q"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "z", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["r"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "A", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["s"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "F", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["t"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "G", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["u"]; });
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "I", function() { return __WEBPACK_IMPORTED_MODULE_2__getters_js__["v"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__parseHtmlToContainer_js__ = __webpack_require__(36);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "L", function() { return __WEBPACK_IMPORTED_MODULE_3__parseHtmlToContainer_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__animationEndEvent_js__ = __webpack_require__(37);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "c", function() { return __WEBPACK_IMPORTED_MODULE_4__animationEndEvent_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__measureScrollbar_js__ = __webpack_require__(38);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "K", function() { return __WEBPACK_IMPORTED_MODULE_5__measureScrollbar_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__renderers_render_js__ = __webpack_require__(39);
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "N", function() { return __WEBPACK_IMPORTED_MODULE_6__renderers_render_js__["a"]; });









/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
const swalPrefix = 'swal2-'
/* unused harmony export swalPrefix */


const prefix = (items) => {
  const result = {}
  for (const i in items) {
    result[items[i]] = swalPrefix + items[i]
  }
  return result
}
/* unused harmony export prefix */


const swalClasses = prefix([
  'container',
  'shown',
  'height-auto',
  'iosfix',
  'popup',
  'modal',
  'no-backdrop',
  'toast',
  'toast-shown',
  'toast-column',
  'show',
  'hide',
  'close',
  'title',
  'header',
  'content',
  'html-container',
  'actions',
  'confirm',
  'cancel',
  'footer',
  'icon',
  'icon-content',
  'image',
  'input',
  'file',
  'range',
  'select',
  'radio',
  'checkbox',
  'label',
  'textarea',
  'inputerror',
  'validation-message',
  'progress-steps',
  'active-progress-step',
  'progress-step',
  'progress-step-line',
  'loading',
  'styled',
  'top',
  'top-start',
  'top-end',
  'top-left',
  'top-right',
  'center',
  'center-start',
  'center-end',
  'center-left',
  'center-right',
  'bottom',
  'bottom-start',
  'bottom-end',
  'bottom-left',
  'bottom-right',
  'grow-row',
  'grow-column',
  'grow-fullscreen',
  'rtl',
  'timer-progress-bar',
  'scrollbar-measure',
])
/* harmony export (immutable) */ __webpack_exports__["b"] = swalClasses;


const iconTypes = prefix([
  'success',
  'warning',
  'info',
  'question',
  'error'
])
/* harmony export (immutable) */ __webpack_exports__["a"] = iconTypes;



/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
const consolePrefix = 'SweetAlert2:'
/* unused harmony export consolePrefix */


/**
 * Filter the unique values into a new array
 * @param arr
 */
const uniqueArray = (arr) => {
  const result = []
  for (let i = 0; i < arr.length; i++) {
    if (result.indexOf(arr[i]) === -1) {
      result.push(arr[i])
    }
  }
  return result
}
/* harmony export (immutable) */ __webpack_exports__["g"] = uniqueArray;


/**
 * Capitalize the first letter of a string
 * @param str
 */
const capitalizeFirstLetter = (str) => str.charAt(0).toUpperCase() + str.slice(1)
/* harmony export (immutable) */ __webpack_exports__["b"] = capitalizeFirstLetter;


/**
 * Returns the array ob object values (Object.values isn't supported in IE11)
 * @param obj
 */
const objectValues = (obj) => Object.keys(obj).map(key => obj[key])
/* harmony export (immutable) */ __webpack_exports__["e"] = objectValues;


/**
 * Convert NodeList to Array
 * @param nodeList
 */
const toArray = (nodeList) => Array.prototype.slice.call(nodeList)
/* harmony export (immutable) */ __webpack_exports__["f"] = toArray;


/**
 * Standardise console warnings
 * @param message
 */
const warn = (message) => {
  console.warn(`${consolePrefix} ${message}`)
}
/* harmony export (immutable) */ __webpack_exports__["h"] = warn;


/**
 * Standardise console errors
 * @param message
 */
const error = (message) => {
  console.error(`${consolePrefix} ${message}`)
}
/* harmony export (immutable) */ __webpack_exports__["c"] = error;


/**
 * Private global state for `warnOnce`
 * @type {Array}
 * @private
 */
const previousWarnOnceMessages = []

/**
 * Show a console warning, but only if it hasn't already been shown
 * @param message
 */
const warnOnce = (message) => {
  if (!previousWarnOnceMessages.includes(message)) {
    previousWarnOnceMessages.push(message)
    warn(message)
  }
}
/* unused harmony export warnOnce */


/**
 * Show a one-time console warning about deprecated params/methods
 */
const warnAboutDepreation = (deprecatedParam, useInstead) => {
  warnOnce(`"${deprecatedParam}" is deprecated and will be removed in the next major release. Please use "${useInstead}" instead.`)
}
/* harmony export (immutable) */ __webpack_exports__["i"] = warnAboutDepreation;


/**
 * If `arg` is a function, call it (with no arguments or context) and return the result.
 * Otherwise, just pass the value through
 * @param arg
 */
const callIfFunction = (arg) => typeof arg === 'function' ? arg() : arg
/* harmony export (immutable) */ __webpack_exports__["a"] = callIfFunction;


const isPromise = (arg) => arg && Promise.resolve(arg) === arg
/* harmony export (immutable) */ __webpack_exports__["d"] = isPromise;



/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * This module containts `WeakMap`s for each effectively-"private  property" that a `Swal` has.
 * For example, to set the private property "foo" of `this` to "bar", you can `privateProps.foo.set(this, 'bar')`
 * This is the approach that Babel will probably take to implement private methods/fields
 *   https://github.com/tc39/proposal-private-methods
 *   https://github.com/babel/babel/pull/7555
 * Once we have the changes from that PR in Babel, and our core class fits reasonable in *one module*
 *   then we can use that language feature.
 */

/* harmony default export */ __webpack_exports__["a"] = ({
  promise: new WeakMap(),
  innerParams: new WeakMap(),
  domCache: new WeakMap()
});


/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["h"] = getInput;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getters_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_js__ = __webpack_require__(2);




// Remember state in cases where opening and handling a modal will fiddle with it.
const states = {
  previousBodyPadding: null
}
/* harmony export (immutable) */ __webpack_exports__["p"] = states;


const hasClass = (elem, className) => {
  if (!className) {
    return false
  }
  const classList = className.split(/\s+/)
  for (let i = 0; i < classList.length; i++) {
    if (!elem.classList.contains(classList[i])) {
      return false
    }
  }
  return true
}
/* harmony export (immutable) */ __webpack_exports__["i"] = hasClass;


const removeCustomClasses = (elem, params) => {
  Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["f" /* toArray */])(elem.classList).forEach(className => {
    if (
      !Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["e" /* objectValues */])(__WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */]).includes(className) &&
      !Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["e" /* objectValues */])(__WEBPACK_IMPORTED_MODULE_1__classes_js__["a" /* iconTypes */]).includes(className) &&
      !Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["e" /* objectValues */])(params.showClass).includes(className)
    ) {
      elem.classList.remove(className)
    }
  })
}

const applyCustomClass = (elem, params, className) => {
  removeCustomClasses(elem, params)

  if (params.customClass && params.customClass[className]) {
    if (typeof params.customClass[className] !== 'string' && !params.customClass[className].forEach) {
      return Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["h" /* warn */])(`Invalid type of customClass.${className}! Expected string or iterable object, got "${typeof params.customClass[className]}"`)
    }

    addClass(elem, params.customClass[className])
  }
}
/* harmony export (immutable) */ __webpack_exports__["c"] = applyCustomClass;


function getInput (content, inputType) {
  if (!inputType) {
    return null
  }
  switch (inputType) {
    case 'select':
    case 'textarea':
    case 'file':
      return getChildByClass(content, __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */][inputType])
    case 'checkbox':
      return content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].checkbox} input`)
    case 'radio':
      return content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].radio} input:checked`) ||
        content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].radio} input:first-child`)
    case 'range':
      return content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].range} input`)
    default:
      return getChildByClass(content, __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].input)
  }
}

const focusInput = (input) => {
  input.focus()

  // place cursor at end of text in text input
  if (input.type !== 'file') {
    // http://stackoverflow.com/a/2345915
    const val = input.value
    input.value = ''
    input.value = val
  }
}
/* harmony export (immutable) */ __webpack_exports__["f"] = focusInput;


const toggleClass = (target, classList, condition) => {
  if (!target || !classList) {
    return
  }
  if (typeof classList === 'string') {
    classList = classList.split(/\s+/).filter(Boolean)
  }
  classList.forEach((className) => {
    if (target.forEach) {
      target.forEach((elem) => {
        condition ? elem.classList.add(className) : elem.classList.remove(className)
      })
    } else {
      condition ? target.classList.add(className) : target.classList.remove(className)
    }
  })
}
/* unused harmony export toggleClass */


const addClass = (target, classList) => {
  toggleClass(target, classList, true)
}
/* harmony export (immutable) */ __webpack_exports__["a"] = addClass;


const removeClass = (target, classList) => {
  toggleClass(target, classList, false)
}
/* harmony export (immutable) */ __webpack_exports__["n"] = removeClass;


const getChildByClass = (elem, className) => {
  for (let i = 0; i < elem.childNodes.length; i++) {
    if (hasClass(elem.childNodes[i], className)) {
      return elem.childNodes[i]
    }
  }
}
/* harmony export (immutable) */ __webpack_exports__["g"] = getChildByClass;


const applyNumericalStyle = (elem, property, value) => {
  if (value || parseInt(value) === 0) {
    elem.style[property] = (typeof value === 'number') ? `${value}px` : value
  } else {
    elem.style.removeProperty(property)
  }
}
/* harmony export (immutable) */ __webpack_exports__["d"] = applyNumericalStyle;


const show = (elem, display = 'flex') => {
  elem.style.opacity = ''
  elem.style.display = display
}
/* harmony export (immutable) */ __webpack_exports__["o"] = show;


const hide = (elem) => {
  elem.style.opacity = ''
  elem.style.display = 'none'
}
/* harmony export (immutable) */ __webpack_exports__["k"] = hide;


const toggle = (elem, condition, display) => {
  condition ? show(elem, display) : hide(elem)
}
/* harmony export (immutable) */ __webpack_exports__["r"] = toggle;


// borrowed from jquery $(elem).is(':visible') implementation
const isVisible = (elem) => !!(elem && (elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length))
/* harmony export (immutable) */ __webpack_exports__["m"] = isVisible;


/* istanbul ignore next */
const isScrollable = (elem) => !!(elem.scrollHeight > elem.clientHeight)
/* harmony export (immutable) */ __webpack_exports__["l"] = isScrollable;


// borrowed from https://stackoverflow.com/a/46352119
const hasCssAnimation = (elem) => {
  const style = window.getComputedStyle(elem)

  const animDuration = parseFloat(style.getPropertyValue('animation-duration') || '0')
  const transDuration = parseFloat(style.getPropertyValue('transition-duration') || '0')

  return animDuration > 0 || transDuration > 0
}
/* harmony export (immutable) */ __webpack_exports__["j"] = hasCssAnimation;


const contains = (haystack, needle) => {
  if (typeof haystack.contains === 'function') {
    return haystack.contains(needle)
  }
}
/* harmony export (immutable) */ __webpack_exports__["e"] = contains;


const animateTimerProgressBar = (timer, reset = false) => {
  const timerProgressBar = Object(__WEBPACK_IMPORTED_MODULE_0__getters_js__["q" /* getTimerProgressBar */])()
  if (isVisible(timerProgressBar)) {
    if (reset) {
      timerProgressBar.style.transition = 'none'
      timerProgressBar.style.width = '100%'
    }
    setTimeout(() => {
      timerProgressBar.style.transition = `width ${timer / 1000}s linear`
      timerProgressBar.style.width = '0%'
    }, 10)
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = animateTimerProgressBar;


const stopTimerProgressBar = () => {
  const timerProgressBar = Object(__WEBPACK_IMPORTED_MODULE_0__getters_js__["q" /* getTimerProgressBar */])()
  const timerProgressBarWidth = parseInt(window.getComputedStyle(timerProgressBar).width)
  timerProgressBar.style.removeProperty('transition')
  timerProgressBar.style.width = '100%'
  const timerProgressBarFullWidth = parseInt(window.getComputedStyle(timerProgressBar).width)
  const timerProgressBarPercent = parseInt(timerProgressBarWidth / timerProgressBarFullWidth * 100)
  timerProgressBar.style.removeProperty('transition')
  timerProgressBar.style.width = `${timerProgressBarPercent}%`
}
/* harmony export (immutable) */ __webpack_exports__["q"] = stopTimerProgressBar;



/***/ }),
/* 5 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__domUtils_js__ = __webpack_require__(4);




const getContainer = () => document.body.querySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].container}`)
/* harmony export (immutable) */ __webpack_exports__["f"] = getContainer;


const elementBySelector = (selectorString) => {
  const container = getContainer()
  return container ? container.querySelector(selectorString) : null
}
/* harmony export (immutable) */ __webpack_exports__["a"] = elementBySelector;


const elementByClass = (className) => {
  return elementBySelector(`.${className}`)
}

const getPopup = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].popup)
/* harmony export (immutable) */ __webpack_exports__["o"] = getPopup;


const getIcons = () => {
  const popup = getPopup()
  return Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["f" /* toArray */])(popup.querySelectorAll(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon}`))
}
/* harmony export (immutable) */ __webpack_exports__["m"] = getIcons;


const getIcon = () => {
  const visibleIcon = getIcons().filter(icon => Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["m" /* isVisible */])(icon))
  return visibleIcon.length ? visibleIcon[0] : null
}
/* harmony export (immutable) */ __webpack_exports__["l"] = getIcon;


const getTitle = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].title)
/* harmony export (immutable) */ __webpack_exports__["r"] = getTitle;


const getContent = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].content)
/* harmony export (immutable) */ __webpack_exports__["g"] = getContent;


const getHtmlContainer = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['html-container'])
/* harmony export (immutable) */ __webpack_exports__["k"] = getHtmlContainer;


const getImage = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].image)
/* harmony export (immutable) */ __webpack_exports__["n"] = getImage;


const getProgressSteps = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['progress-steps'])
/* harmony export (immutable) */ __webpack_exports__["p"] = getProgressSteps;


const getValidationMessage = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['validation-message'])
/* harmony export (immutable) */ __webpack_exports__["s"] = getValidationMessage;


const getConfirmButton = () => elementBySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].actions} .${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].confirm}`)
/* harmony export (immutable) */ __webpack_exports__["e"] = getConfirmButton;


const getCancelButton = () => elementBySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].actions} .${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].cancel}`)
/* harmony export (immutable) */ __webpack_exports__["c"] = getCancelButton;


const getActions = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].actions)
/* harmony export (immutable) */ __webpack_exports__["b"] = getActions;


const getHeader = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].header)
/* harmony export (immutable) */ __webpack_exports__["j"] = getHeader;


const getFooter = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].footer)
/* harmony export (immutable) */ __webpack_exports__["i"] = getFooter;


const getTimerProgressBar = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['timer-progress-bar'])
/* harmony export (immutable) */ __webpack_exports__["q"] = getTimerProgressBar;


const getCloseButton = () => elementByClass(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].close)
/* harmony export (immutable) */ __webpack_exports__["d"] = getCloseButton;


// https://github.com/jkup/focusable/blob/master/index.js
const focusable = `
  a[href],
  area[href],
  input:not([disabled]),
  select:not([disabled]),
  textarea:not([disabled]),
  button:not([disabled]),
  iframe,
  object,
  embed,
  [tabindex="0"],
  [contenteditable],
  audio[controls],
  video[controls],
  summary
`

const getFocusableElements = () => {
  const focusableElementsWithTabindex = Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["f" /* toArray */])(
    getPopup().querySelectorAll('[tabindex]:not([tabindex="-1"]):not([tabindex="0"])')
  )
  // sort according to tabindex
    .sort((a, b) => {
      a = parseInt(a.getAttribute('tabindex'))
      b = parseInt(b.getAttribute('tabindex'))
      if (a > b) {
        return 1
      } else if (a < b) {
        return -1
      }
      return 0
    })

  const otherFocusableElements = Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["f" /* toArray */])(
    getPopup().querySelectorAll(focusable)
  ).filter(el => el.getAttribute('tabindex') !== '-1')

  return Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["g" /* uniqueArray */])(focusableElementsWithTabindex.concat(otherFocusableElements)).filter(el => Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["m" /* isVisible */])(el))
}
/* harmony export (immutable) */ __webpack_exports__["h"] = getFocusableElements;


const isModal = () => {
  return !isToast() && !document.body.classList.contains(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['no-backdrop'])
}
/* harmony export (immutable) */ __webpack_exports__["u"] = isModal;


const isToast = () => {
  return document.body.classList.contains(__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['toast-shown'])
}
/* harmony export (immutable) */ __webpack_exports__["v"] = isToast;


const isLoading = () => {
  return getPopup().hasAttribute('data-loading')
}
/* harmony export (immutable) */ __webpack_exports__["t"] = isLoading;



/***/ }),
/* 6 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
const DismissReason = Object.freeze({
  cancel: 'cancel',
  backdrop: 'backdrop',
  close: 'close',
  esc: 'esc',
  timer: 'timer'
})
/* harmony export (immutable) */ __webpack_exports__["a"] = DismissReason;



/***/ }),
/* 7 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__SweetAlert_js__ = __webpack_require__(32);


const Swal = __WEBPACK_IMPORTED_MODULE_0__SweetAlert_js__["a" /* default */]
Swal.default = Swal

/* harmony default export */ __webpack_exports__["default"] = (Swal);


/***/ }),
/* 8 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__constants_js__ = __webpack_require__(55);


const globalState = {}

/* harmony default export */ __webpack_exports__["a"] = (globalState);

const focusPreviousActiveElement = () => {
  if (globalState.previousActiveElement && globalState.previousActiveElement.focus) {
    globalState.previousActiveElement.focus()
    globalState.previousActiveElement = null
  } else if (document.body) {
    document.body.focus()
  }
}

// Restore previous active (focused) element
const restoreActiveElement = () => {
  return new Promise(resolve => {
    const x = window.scrollX
    const y = window.scrollY
    globalState.restoreFocusTimeout = setTimeout(() => {
      focusPreviousActiveElement()
      resolve()
    }, __WEBPACK_IMPORTED_MODULE_0__constants_js__["a" /* RESTORE_FOCUS_TIMEOUT */]) // issues/900
    if (typeof x !== 'undefined' && typeof y !== 'undefined') { // IE doesn't have scrollX/scrollY support
      window.scrollTo(x, y)
    }
  })
}
/* harmony export (immutable) */ __webpack_exports__["b"] = restoreActiveElement;



/***/ }),
/* 9 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return showLoading; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return showLoading; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__sweetalert2_js__ = __webpack_require__(7);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_classes_js__ = __webpack_require__(1);




/**
 * Show spinner instead of Confirm button
 */
const showLoading = () => {
  let popup = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w" /* getPopup */]()
  if (!popup) {
    __WEBPACK_IMPORTED_MODULE_1__sweetalert2_js__["default"].fire()
  }
  popup = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w" /* getPopup */]()
  const actions = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["h" /* getActions */]()
  const confirmButton = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["l" /* getConfirmButton */]()

  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["O" /* show */](actions)
  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["O" /* show */](confirmButton, 'inline-block')
  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["a" /* addClass */]([popup, actions], __WEBPACK_IMPORTED_MODULE_2__utils_classes_js__["b" /* swalClasses */].loading)
  confirmButton.disabled = true

  popup.setAttribute('data-loading', true)
  popup.setAttribute('aria-busy', true)
  popup.focus()
}




/***/ }),
/* 10 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_dom_domUtils_js__ = __webpack_require__(4);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "g", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["m"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "p", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "q", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["z"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "h", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["n"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "l", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["r"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "o", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["u"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "m", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["s"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "n", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["t"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "e", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["k"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "c", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["h"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "f", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["l"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "d", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["i"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "k", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["q"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "j", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["p"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "i", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["o"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "r", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["A"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "s", function() { return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["F"]; });





/*
 * Global function to determine if SweetAlert2 popup is shown
 */
const isVisible = () => {
  return __WEBPACK_IMPORTED_MODULE_1__utils_dom_domUtils_js__["m" /* isVisible */](__WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w" /* getPopup */]())
}
/* harmony export (immutable) */ __webpack_exports__["t"] = isVisible;


/*
 * Global function to click 'Confirm' button
 */
const clickConfirm = () => __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["l" /* getConfirmButton */]() && __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["l" /* getConfirmButton */]().click()
/* harmony export (immutable) */ __webpack_exports__["b"] = clickConfirm;


/*
 * Global function to click 'Cancel' button
 */
const clickCancel = () => __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["i" /* getCancelButton */]() && __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["i" /* getCancelButton */]().click()
/* harmony export (immutable) */ __webpack_exports__["a"] = clickCancel;



/***/ }),
/* 11 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// Detect Node env
const isNodeEnv = () => typeof window === 'undefined' || typeof document === 'undefined'
/* harmony export (immutable) */ __webpack_exports__["a"] = isNodeEnv;



/***/ }),
/* 12 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);


// private global state for the queue feature
let currentSteps = []

/*
 * Global function for chaining sweetAlert popups
 */
const queue = function (steps) {
  const Swal = this
  currentSteps = steps

  const resetAndResolve = (resolve, value) => {
    currentSteps = []
    resolve(value)
  }

  const queueResult = []
  return new Promise((resolve) => {
    (function step (i, callback) {
      if (i < currentSteps.length) {
        document.body.setAttribute('data-swal2-queue-step', i)
        Swal.fire(currentSteps[i]).then((result) => {
          if (typeof result.value !== 'undefined') {
            queueResult.push(result.value)
            step(i + 1, callback)
          } else {
            resetAndResolve(resolve, { dismiss: result.dismiss })
          }
        })
      } else {
        resetAndResolve(resolve, { value: queueResult })
      }
    })(0)
  })
}
/* harmony export (immutable) */ __webpack_exports__["d"] = queue;


/*
 * Global function for getting the index of current popup in queue
 */
const getQueueStep = () => __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["m" /* getContainer */]().getAttribute('data-queue-step')
/* harmony export (immutable) */ __webpack_exports__["b"] = getQueueStep;


/*
 * Global function for inserting a popup to the queue
 */
const insertQueueStep = (step, index) => {
  if (index && index < currentSteps.length) {
    return currentSteps.splice(index, 0, step)
  }
  return currentSteps.push(step)
}
/* harmony export (immutable) */ __webpack_exports__["c"] = insertQueueStep;


/*
 * Global function for deleting a popup from the queue
 */
const deleteQueueStep = (index) => {
  if (typeof currentSteps[index] !== 'undefined') {
    currentSteps.splice(index, 1)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = deleteQueueStep;



/***/ }),
/* 13 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_utils_js__ = __webpack_require__(2);


const defaultParams = {
  title: '',
  titleText: '',
  text: '',
  html: '',
  footer: '',
  icon: undefined,
  iconHtml: undefined,
  toast: false,
  animation: true,
  showClass: {
    popup: 'swal2-show',
    backdrop: 'swal2-backdrop-show',
    icon: 'swal2-icon-show',
  },
  hideClass: {
    popup: 'swal2-hide',
    backdrop: 'swal2-backdrop-hide',
    icon: 'swal2-icon-hide',
  },
  customClass: undefined,
  target: 'body',
  backdrop: true,
  heightAuto: true,
  allowOutsideClick: true,
  allowEscapeKey: true,
  allowEnterKey: true,
  stopKeydownPropagation: true,
  keydownListenerCapture: false,
  showConfirmButton: true,
  showCancelButton: false,
  preConfirm: undefined,
  confirmButtonText: 'OK',
  confirmButtonAriaLabel: '',
  confirmButtonColor: undefined,
  cancelButtonText: 'Cancel',
  cancelButtonAriaLabel: '',
  cancelButtonColor: undefined,
  buttonsStyling: true,
  reverseButtons: false,
  focusConfirm: true,
  focusCancel: false,
  showCloseButton: false,
  closeButtonHtml: '&times;',
  closeButtonAriaLabel: 'Close this dialog',
  showLoaderOnConfirm: false,
  imageUrl: undefined,
  imageWidth: undefined,
  imageHeight: undefined,
  imageAlt: '',
  timer: undefined,
  timerProgressBar: false,
  width: undefined,
  padding: undefined,
  background: undefined,
  input: undefined,
  inputPlaceholder: '',
  inputValue: '',
  inputOptions: {},
  inputAutoTrim: true,
  inputAttributes: {},
  inputValidator: undefined,
  validationMessage: undefined,
  grow: false,
  position: 'center',
  progressSteps: [],
  currentProgressStep: undefined,
  progressStepsDistance: undefined,
  onBeforeOpen: undefined,
  onOpen: undefined,
  onRender: undefined,
  onClose: undefined,
  onAfterClose: undefined,
  scrollbarPadding: true
}
/* unused harmony export defaultParams */


const updatableParams = [
  'title',
  'titleText',
  'text',
  'html',
  'icon',
  'customClass',
  'showConfirmButton',
  'showCancelButton',
  'confirmButtonText',
  'confirmButtonAriaLabel',
  'confirmButtonColor',
  'cancelButtonText',
  'cancelButtonAriaLabel',
  'cancelButtonColor',
  'buttonsStyling',
  'reverseButtons',
  'imageUrl',
  'imageWidth',
  'imageHeight',
  'imageAlt',
  'progressSteps',
  'currentProgressStep'
]
/* unused harmony export updatableParams */


const deprecatedParams = {
  animation: 'showClass" and "hideClass',
}
/* unused harmony export deprecatedParams */


const toastIncompatibleParams = [
  'allowOutsideClick',
  'allowEnterKey',
  'backdrop',
  'focusConfirm',
  'focusCancel',
  'heightAuto',
  'keydownListenerCapture'
]

/**
 * Is valid parameter
 * @param {String} paramName
 */
const isValidParameter = (paramName) => {
  return Object.prototype.hasOwnProperty.call(defaultParams, paramName)
}
/* harmony export (immutable) */ __webpack_exports__["d"] = isValidParameter;


/**
 * Is valid parameter for Swal.update() method
 * @param {String} paramName
 */
const isUpdatableParameter = (paramName) => {
  return updatableParams.indexOf(paramName) !== -1
}
/* harmony export (immutable) */ __webpack_exports__["c"] = isUpdatableParameter;


/**
 * Is deprecated parameter
 * @param {String} paramName
 */
const isDeprecatedParameter = (paramName) => {
  return deprecatedParams[paramName]
}
/* harmony export (immutable) */ __webpack_exports__["b"] = isDeprecatedParameter;


const checkIfParamIsValid = (param) => {
  if (!isValidParameter(param)) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["h" /* warn */])(`Unknown parameter "${param}"`)
  }
}

const checkIfToastParamIsValid = (param) => {
  if (toastIncompatibleParams.includes(param)) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["h" /* warn */])(`The parameter "${param}" is incompatible with toasts`)
  }
}

const checkIfParamIsDeprecated = (param) => {
  if (isDeprecatedParameter(param)) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["i" /* warnAboutDepreation */])(param, isDeprecatedParameter(param))
  }
}

/**
 * Show relevant warnings for given params
 *
 * @param params
 */
const showWarningsForParams = (params) => {
  for (const param in params) {
    checkIfParamIsValid(param)

    if (params.toast) {
      checkIfToastParamIsValid(param)
    }

    checkIfParamIsDeprecated(param)
  }
}
/* harmony export (immutable) */ __webpack_exports__["e"] = showWarningsForParams;


/* harmony default export */ __webpack_exports__["a"] = (defaultParams);


/***/ }),
/* 14 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);


const fixScrollbar = () => {
  // for queues, do not do this more than once
  if (__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding !== null) {
    return
  }
  // if the body has overflow
  if (document.body.scrollHeight > window.innerHeight) {
    // add padding so the content doesn't shift after removal of scrollbar
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding = parseInt(window.getComputedStyle(document.body).getPropertyValue('padding-right'))
    document.body.style.paddingRight = `${__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding + __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["K" /* measureScrollbar */]()}px`
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = fixScrollbar;


const undoScrollbar = () => {
  if (__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding !== null) {
    document.body.style.paddingRight = `${__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding}px`
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["P" /* states */].previousBodyPadding = null
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = undoScrollbar;



/***/ }),
/* 15 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__ = __webpack_require__(1);



// Fix iOS scrolling http://stackoverflow.com/q/39626302

/* istanbul ignore next */
const iOSfix = () => {
  const iOS = (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)
  if (iOS && !__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["B" /* hasClass */](document.body, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].iosfix)) {
    const offset = document.body.scrollTop
    document.body.style.top = `${offset * -1}px`
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["a" /* addClass */](document.body, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].iosfix)
    lockBodyScroll()
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = iOSfix;


/* istanbul ignore next */
const lockBodyScroll = () => { // #1246
  const container = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["m" /* getContainer */]()
  let preventTouchMove
  container.ontouchstart = (e) => {
    preventTouchMove =
      e.target === container ||
      (
        !__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["H" /* isScrollable */](container) &&
        e.target.tagName !== 'INPUT' // #1603
      )
  }
  container.ontouchmove = (e) => {
    if (preventTouchMove) {
      e.preventDefault()
      e.stopPropagation()
    }
  }
}

/* istanbul ignore next */
const undoIOSfix = () => {
  if (__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["B" /* hasClass */](document.body, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].iosfix)) {
    const offset = parseInt(document.body.style.top, 10)
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["M" /* removeClass */](document.body, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].iosfix)
    document.body.style.top = ''
    document.body.scrollTop = (offset * -1)
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = undoIOSfix;



/***/ }),
/* 16 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);


// https://stackoverflow.com/a/21825207
const isIE11 = () => !!window.MSInputMethodContext && !!document.documentMode

// Fix IE11 centering sweetalert2/issues/933
/* istanbul ignore next */
const fixVerticalPositionIE = () => {
  const container = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["m" /* getContainer */]()
  const popup = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["w" /* getPopup */]()

  container.style.removeProperty('align-items')
  if (popup.offsetTop < 0) {
    container.style.alignItems = 'flex-start'
  }
}

/* istanbul ignore next */
const IEfix = () => {
  if (typeof window !== 'undefined' && isIE11()) {
    fixVerticalPositionIE()
    window.addEventListener('resize', fixVerticalPositionIE)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = IEfix;


/* istanbul ignore next */
const undoIEfix = () => {
  if (typeof window !== 'undefined' && isIE11()) {
    window.removeEventListener('resize', fixVerticalPositionIE)
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = undoIEfix;



/***/ }),
/* 17 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_getters_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_domUtils_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_js__ = __webpack_require__(2);




// From https://developer.paciellogroup.com/blog/2018/06/the-current-state-of-modal-dialog-accessibility/
// Adding aria-hidden="true" to elements outside of the active modal dialog ensures that
// elements not within the active modal dialog will not be surfaced if a user opens a screen
// reader’s list of elements (headings, form controls, landmarks, etc.) in the document.

const setAriaHidden = () => {
  const bodyChildren = Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["f" /* toArray */])(document.body.children)
  bodyChildren.forEach(el => {
    if (el === Object(__WEBPACK_IMPORTED_MODULE_0__dom_getters_js__["f" /* getContainer */])() || Object(__WEBPACK_IMPORTED_MODULE_1__dom_domUtils_js__["e" /* contains */])(el, Object(__WEBPACK_IMPORTED_MODULE_0__dom_getters_js__["f" /* getContainer */])())) {
      return
    }

    if (el.hasAttribute('aria-hidden')) {
      el.setAttribute('data-previous-aria-hidden', el.getAttribute('aria-hidden'))
    }
    el.setAttribute('aria-hidden', 'true')
  })
}
/* harmony export (immutable) */ __webpack_exports__["a"] = setAriaHidden;


const unsetAriaHidden = () => {
  const bodyChildren = Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["f" /* toArray */])(document.body.children)
  bodyChildren.forEach(el => {
    if (el.hasAttribute('data-previous-aria-hidden')) {
      el.setAttribute('aria-hidden', el.getAttribute('data-previous-aria-hidden'))
      el.removeAttribute('data-previous-aria-hidden')
    } else {
      el.removeAttribute('aria-hidden')
    }
  })
}
/* harmony export (immutable) */ __webpack_exports__["b"] = unsetAriaHidden;



/***/ }),
/* 18 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * This module containts `WeakMap`s for each effectively-"private  property" that a `Swal` has.
 * For example, to set the private property "foo" of `this` to "bar", you can `privateProps.foo.set(this, 'bar')`
 * This is the approach that Babel will probably take to implement private methods/fields
 *   https://github.com/tc39/proposal-private-methods
 *   https://github.com/babel/babel/pull/7555
 * Once we have the changes from that PR in Babel, and our core class fits reasonable in *one module*
 *   then we can use that language feature.
 */

/* harmony default export */ __webpack_exports__["a"] = ({
  swalPromiseResolve: new WeakMap()
});


/***/ }),
/* 19 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__domUtils_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__staticMethods_showLoading_js__ = __webpack_require__(9);






const handleInputOptionsAndValue = (instance, params) => {
  if (params.input === 'select' || params.input === 'radio') {
    handleInputOptions(instance, params)
  } else if (['text', 'email', 'number', 'tel', 'textarea'].includes(params.input) && Object(__WEBPACK_IMPORTED_MODULE_3__utils_js__["d" /* isPromise */])(params.inputValue)) {
    handleInputValue(instance, params)
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = handleInputOptionsAndValue;


const getInputValue = (instance, innerParams) => {
  const input = instance.getInput()
  if (!input) {
    return null
  }
  switch (innerParams.input) {
    case 'checkbox':
      return getCheckboxValue(input)
    case 'radio':
      return getRadioValue(input)
    case 'file':
      return getFileValue(input)
    default:
      return innerParams.inputAutoTrim ? input.value.trim() : input.value
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = getInputValue;


const getCheckboxValue = (input) => input.checked ? 1 : 0

const getRadioValue = (input) => input.checked ? input.value : null

const getFileValue = (input) => input.files.length ? (input.getAttribute('multiple') !== null ? input.files : input.files[0]) : null

const handleInputOptions = (instance, params) => {
  const content = __WEBPACK_IMPORTED_MODULE_0__index_js__["n" /* getContent */]()
  const processInputOptions = (inputOptions) => populateInputOptions[params.input](content, formatInputOptions(inputOptions), params)
  if (Object(__WEBPACK_IMPORTED_MODULE_3__utils_js__["d" /* isPromise */])(params.inputOptions)) {
    Object(__WEBPACK_IMPORTED_MODULE_4__staticMethods_showLoading_js__["b" /* showLoading */])()
    params.inputOptions.then((inputOptions) => {
      instance.hideLoading()
      processInputOptions(inputOptions)
    })
  } else if (typeof params.inputOptions === 'object') {
    processInputOptions(params.inputOptions)
  } else {
    Object(__WEBPACK_IMPORTED_MODULE_3__utils_js__["c" /* error */])(`Unexpected type of inputOptions! Expected object, Map or Promise, got ${typeof params.inputOptions}`)
  }
}

const handleInputValue = (instance, params) => {
  const input = instance.getInput()
  __WEBPACK_IMPORTED_MODULE_0__index_js__["D" /* hide */](input)
  params.inputValue.then((inputValue) => {
    input.value = params.input === 'number' ? parseFloat(inputValue) || 0 : `${inputValue}`
    __WEBPACK_IMPORTED_MODULE_0__index_js__["O" /* show */](input)
    input.focus()
    instance.hideLoading()
  })
    .catch((err) => {
      Object(__WEBPACK_IMPORTED_MODULE_3__utils_js__["c" /* error */])(`Error in inputValue promise: ${err}`)
      input.value = ''
      __WEBPACK_IMPORTED_MODULE_0__index_js__["O" /* show */](input)
      input.focus()
      instance.hideLoading()
    })
}

const populateInputOptions = {
  select: (content, inputOptions, params) => {
    const select = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].select)
    inputOptions.forEach(inputOption => {
      const optionValue = inputOption[0]
      const optionLabel = inputOption[1]
      const option = document.createElement('option')
      option.value = optionValue
      option.innerHTML = optionLabel
      if (params.inputValue.toString() === optionValue.toString()) {
        option.selected = true
      }
      select.appendChild(option)
    })
    select.focus()
  },

  radio: (content, inputOptions, params) => {
    const radio = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].radio)
    inputOptions.forEach(inputOption => {
      const radioValue = inputOption[0]
      const radioLabel = inputOption[1]
      const radioInput = document.createElement('input')
      const radioLabelElement = document.createElement('label')
      radioInput.type = 'radio'
      radioInput.name = __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].radio
      radioInput.value = radioValue
      if (params.inputValue.toString() === radioValue.toString()) {
        radioInput.checked = true
      }
      const label = document.createElement('span')
      label.innerHTML = radioLabel
      label.className = __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].label
      radioLabelElement.appendChild(radioInput)
      radioLabelElement.appendChild(label)
      radio.appendChild(radioLabelElement)
    })
    const radios = radio.querySelectorAll('input')
    if (radios.length) {
      radios[0].focus()
    }
  }
}

/**
 * Converts `inputOptions` into an array of `[value, label]`s
 * @param inputOptions
 */
const formatInputOptions = (inputOptions) => {
  const result = []
  if (typeof Map !== 'undefined' && inputOptions instanceof Map) {
    inputOptions.forEach((value, key) => {
      result.push([key, value])
    })
  } else {
    Object.keys(inputOptions).forEach(key => {
      result.push([key, inputOptions[key]])
    })
  }
  return result
}


/***/ }),
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(7);


/***/ }),
/* 32 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__staticMethods_js__ = __webpack_require__(33);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__instanceMethods_js__ = __webpack_require__(56);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__privateProps_js__ = __webpack_require__(3);






let currentInstance

// SweetAlert constructor
function SweetAlert (...args) {
  // Prevent run in Node env
  /* istanbul ignore if */
  if (typeof window === 'undefined') {
    return
  }

  // Check for the existence of Promise
  /* istanbul ignore if */
  if (typeof Promise === 'undefined') {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["c" /* error */])('This package requires a Promise library, please include a shim to enable it in this browser (See: https://github.com/sweetalert2/sweetalert2/wiki/Migration-from-SweetAlert-to-SweetAlert2#1-ie-support)')
  }

  currentInstance = this

  const outerParams = Object.freeze(this.constructor.argsToParams(args))

  Object.defineProperties(this, {
    params: {
      value: outerParams,
      writable: false,
      enumerable: true,
      configurable: true
    }
  })

  const promise = this._main(this.params)
  __WEBPACK_IMPORTED_MODULE_4__privateProps_js__["a" /* default */].promise.set(this, promise)
}

// `catch` cannot be the name of a module export, so we define our thenable methods here instead
SweetAlert.prototype.then = function (onFulfilled) {
  const promise = __WEBPACK_IMPORTED_MODULE_4__privateProps_js__["a" /* default */].promise.get(this)
  return promise.then(onFulfilled)
}
SweetAlert.prototype.finally = function (onFinally) {
  const promise = __WEBPACK_IMPORTED_MODULE_4__privateProps_js__["a" /* default */].promise.get(this)
  return promise.finally(onFinally)
}

// Assign instance methods from src/instanceMethods/*.js to prototype
Object.assign(SweetAlert.prototype, __WEBPACK_IMPORTED_MODULE_3__instanceMethods_js__)

// Assign static methods from src/staticMethods/*.js to constructor
Object.assign(SweetAlert, __WEBPACK_IMPORTED_MODULE_2__staticMethods_js__)

// Proxy to instance methods to constructor, for now, for backwards compatibility
Object.keys(__WEBPACK_IMPORTED_MODULE_3__instanceMethods_js__).forEach(key => {
  SweetAlert[key] = function (...args) {
    if (currentInstance) {
      return currentInstance[key](...args)
    }
  }
})

SweetAlert.DismissReason = __WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__["a" /* DismissReason */]

SweetAlert.version = '9.4.3'

/* harmony default export */ __webpack_exports__["a"] = (SweetAlert);


/***/ }),
/* 33 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__staticMethods_argsToParams_js__ = __webpack_require__(34);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "argsToParams", function() { return __WEBPACK_IMPORTED_MODULE_0__staticMethods_argsToParams_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__ = __webpack_require__(10);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getContainer", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["g"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getPopup", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["p"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getTitle", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["q"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getContent", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["h"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getHtmlContainer", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["l"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getImage", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["o"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getIcon", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["m"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getIcons", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["n"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getCloseButton", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["e"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getActions", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["c"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getConfirmButton", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["f"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getCancelButton", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["d"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getHeader", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["k"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getFooter", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["j"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getFocusableElements", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["i"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getValidationMessage", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["r"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "isLoading", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["s"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "isVisible", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["t"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "clickConfirm", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "clickCancel", function() { return __WEBPACK_IMPORTED_MODULE_1__staticMethods_dom_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__staticMethods_fire_js__ = __webpack_require__(52);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "fire", function() { return __WEBPACK_IMPORTED_MODULE_2__staticMethods_fire_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__staticMethods_mixin_js__ = __webpack_require__(53);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "mixin", function() { return __WEBPACK_IMPORTED_MODULE_3__staticMethods_mixin_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__staticMethods_queue_js__ = __webpack_require__(12);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "queue", function() { return __WEBPACK_IMPORTED_MODULE_4__staticMethods_queue_js__["d"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getQueueStep", function() { return __WEBPACK_IMPORTED_MODULE_4__staticMethods_queue_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "insertQueueStep", function() { return __WEBPACK_IMPORTED_MODULE_4__staticMethods_queue_js__["c"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "deleteQueueStep", function() { return __WEBPACK_IMPORTED_MODULE_4__staticMethods_queue_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__staticMethods_showLoading_js__ = __webpack_require__(9);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "showLoading", function() { return __WEBPACK_IMPORTED_MODULE_5__staticMethods_showLoading_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "enableLoading", function() { return __WEBPACK_IMPORTED_MODULE_5__staticMethods_showLoading_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__ = __webpack_require__(54);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getTimerLeft", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["a"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "stopTimer", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["e"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "resumeTimer", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["d"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "toggleTimer", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["f"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "increaseTimer", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "isTimerRunning", function() { return __WEBPACK_IMPORTED_MODULE_6__staticMethods_timer_js__["c"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__utils_params_js__ = __webpack_require__(13);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "isValidParameter", function() { return __WEBPACK_IMPORTED_MODULE_7__utils_params_js__["d"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "isUpdatableParameter", function() { return __WEBPACK_IMPORTED_MODULE_7__utils_params_js__["c"]; });
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "isDeprecatedParameter", function() { return __WEBPACK_IMPORTED_MODULE_7__utils_params_js__["b"]; });










/***/ }),
/* 34 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_utils_js__ = __webpack_require__(2);


const isJqueryElement = (elem) => typeof elem === 'object' && elem.jquery
const isElement = (elem) => elem instanceof Element || isJqueryElement(elem)

const argsToParams = (args) => {
  const params = {}
  if (typeof args[0] === 'object' && !isElement(args[0])) {
    Object.assign(params, args[0])
  } else {
    ['title', 'html', 'icon'].forEach((name, index) => {
      const arg = args[index]
      if (typeof arg === 'string' || isElement(arg)) {
        params[name] = arg
      } else if (arg !== undefined) {
        Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["c" /* error */])(`Unexpected type of ${name}! Expected "string" or "Element", got ${typeof arg}`)
      }
    })
  }
  return params
}
/* harmony export (immutable) */ __webpack_exports__["a"] = argsToParams;



/***/ }),
/* 35 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__getters_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__domUtils_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__isNodeEnv_js__ = __webpack_require__(11);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__sweetalert2_js__ = __webpack_require__(7);







const sweetHTML = `
 <div aria-labelledby="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].title}" aria-describedby="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].content}" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].popup}" tabindex="-1">
   <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].header}">
     <ul class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['progress-steps']}"></ul>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon} ${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */].error}"></div>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon} ${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */].question}"></div>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon} ${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */].warning}"></div>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon} ${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */].info}"></div>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon} ${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */].success}"></div>
     <img class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].image}" />
     <h2 class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].title}" id="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].title}"></h2>
     <button type="button" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].close}"></button>
   </div>
   <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].content}">
     <div id="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].content}" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['html-container']}"></div>
     <input class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].input}" />
     <input type="file" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].file}" />
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].range}">
       <input type="range" />
       <output></output>
     </div>
     <select class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].select}"></select>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].radio}"></div>
     <label for="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].checkbox}" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].checkbox}">
       <input type="checkbox" />
       <span class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].label}"></span>
     </label>
     <textarea class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].textarea}"></textarea>
     <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['validation-message']}" id="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['validation-message']}"></div>
   </div>
   <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].actions}">
     <button type="button" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].confirm}">OK</button>
     <button type="button" class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].cancel}">Cancel</button>
   </div>
   <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].footer}"></div>
   <div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['timer-progress-bar']}"></div>
 </div>
`.replace(/(^|\n)\s*/g, '')

const resetOldContainer = () => {
  const oldContainer = Object(__WEBPACK_IMPORTED_MODULE_1__getters_js__["f" /* getContainer */])()
  if (!oldContainer) {
    return
  }

  oldContainer.parentNode.removeChild(oldContainer)
  Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["n" /* removeClass */])(
    [document.documentElement, document.body],
    [
      __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['no-backdrop'],
      __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['toast-shown'],
      __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['has-column']
    ]
  )
}

let oldInputVal // IE11 workaround, see #1109 for details
const resetValidationMessage = (e) => {
  if (__WEBPACK_IMPORTED_MODULE_5__sweetalert2_js__["default"].isVisible() && oldInputVal !== e.target.value) {
    __WEBPACK_IMPORTED_MODULE_5__sweetalert2_js__["default"].resetValidationMessage()
  }
  oldInputVal = e.target.value
}

const addInputChangeListeners = () => {
  const content = Object(__WEBPACK_IMPORTED_MODULE_1__getters_js__["g" /* getContent */])()

  const input = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].input)
  const file = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].file)
  const range = content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].range} input`)
  const rangeOutput = content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].range} output`)
  const select = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].select)
  const checkbox = content.querySelector(`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].checkbox} input`)
  const textarea = Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["g" /* getChildByClass */])(content, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].textarea)

  input.oninput = resetValidationMessage
  file.onchange = resetValidationMessage
  select.onchange = resetValidationMessage
  checkbox.onchange = resetValidationMessage
  textarea.oninput = resetValidationMessage

  range.oninput = (e) => {
    resetValidationMessage(e)
    rangeOutput.value = range.value
  }

  range.onchange = (e) => {
    resetValidationMessage(e)
    range.nextSibling.value = range.value
  }
}

const getTarget = (target) => typeof target === 'string' ? document.querySelector(target) : target

const setupAccessibility = (params) => {
  const popup = Object(__WEBPACK_IMPORTED_MODULE_1__getters_js__["o" /* getPopup */])()

  popup.setAttribute('role', params.toast ? 'alert' : 'dialog')
  popup.setAttribute('aria-live', params.toast ? 'polite' : 'assertive')
  if (!params.toast) {
    popup.setAttribute('aria-modal', 'true')
  }
}

const setupRTL = (targetElement) => {
  if (window.getComputedStyle(targetElement).direction === 'rtl') {
    Object(__WEBPACK_IMPORTED_MODULE_2__domUtils_js__["a" /* addClass */])(Object(__WEBPACK_IMPORTED_MODULE_1__getters_js__["f" /* getContainer */])(), __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].rtl)
  }
}

/*
 * Add modal + backdrop to DOM
 */
const init = (params) => {
  // Clean up the old popup container if it exists
  resetOldContainer()

  /* istanbul ignore if */
  if (Object(__WEBPACK_IMPORTED_MODULE_3__isNodeEnv_js__["a" /* isNodeEnv */])()) {
    Object(__WEBPACK_IMPORTED_MODULE_4__utils_js__["c" /* error */])('SweetAlert2 requires document to initialize')
    return
  }

  const container = document.createElement('div')
  container.className = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].container
  container.innerHTML = sweetHTML

  const targetElement = getTarget(params.target)
  targetElement.appendChild(container)

  setupAccessibility(params)
  setupRTL(targetElement)
  addInputChangeListeners()
}
/* harmony export (immutable) */ __webpack_exports__["a"] = init;



/***/ }),
/* 36 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
const parseHtmlToContainer = (param, target) => {
  // DOM element
  if (param instanceof HTMLElement) {
    target.appendChild(param)

  // JQuery element(s)
  } else if (typeof param === 'object') {
    handleJqueryElem(target, param)

  // Plain string
  } else if (param) {
    target.innerHTML = param
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = parseHtmlToContainer;


const handleJqueryElem = (target, elem) => {
  target.innerHTML = ''
  if (0 in elem) {
    for (let i = 0; i in elem; i++) {
      target.appendChild(elem[i].cloneNode(true))
    }
  } else {
    target.appendChild(elem.cloneNode(true))
  }
}


/***/ }),
/* 37 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__isNodeEnv_js__ = __webpack_require__(11);


const animationEndEvent = (() => {
  // Prevent run in Node env
  /* istanbul ignore if */
  if (Object(__WEBPACK_IMPORTED_MODULE_0__isNodeEnv_js__["a" /* isNodeEnv */])()) {
    return false
  }

  const testEl = document.createElement('div')
  const transEndEventNames = {
    WebkitAnimation: 'webkitAnimationEnd',
    OAnimation: 'oAnimationEnd oanimationend',
    animation: 'animationend'
  }
  for (const i in transEndEventNames) {
    if (Object.prototype.hasOwnProperty.call(transEndEventNames, i) && typeof testEl.style[i] !== 'undefined') {
      return transEndEventNames[i]
    }
  }

  return false
})()
/* harmony export (immutable) */ __webpack_exports__["a"] = animationEndEvent;



/***/ }),
/* 38 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);


// Measure scrollbar width for padding body during modal show/hide
// https://github.com/twbs/bootstrap/blob/master/js/src/modal.js
const measureScrollbar = () => {
  const scrollDiv = document.createElement('div')
  scrollDiv.className = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['scrollbar-measure']
  document.body.appendChild(scrollDiv)
  const scrollbarWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth
  document.body.removeChild(scrollDiv)
  return scrollbarWidth
}
/* harmony export (immutable) */ __webpack_exports__["a"] = measureScrollbar;



/***/ }),
/* 39 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getters_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__renderActions_js__ = __webpack_require__(40);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__renderContainer_js__ = __webpack_require__(41);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__renderContent_js__ = __webpack_require__(42);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__renderFooter_js__ = __webpack_require__(44);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__renderHeader_js__ = __webpack_require__(45);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__renderPopup_js__ = __webpack_require__(51);








const render = (instance, params) => {
  Object(__WEBPACK_IMPORTED_MODULE_6__renderPopup_js__["a" /* renderPopup */])(instance, params)
  Object(__WEBPACK_IMPORTED_MODULE_2__renderContainer_js__["a" /* renderContainer */])(instance, params)

  Object(__WEBPACK_IMPORTED_MODULE_5__renderHeader_js__["a" /* renderHeader */])(instance, params)
  Object(__WEBPACK_IMPORTED_MODULE_3__renderContent_js__["a" /* renderContent */])(instance, params)
  Object(__WEBPACK_IMPORTED_MODULE_1__renderActions_js__["a" /* renderActions */])(instance, params)
  Object(__WEBPACK_IMPORTED_MODULE_4__renderFooter_js__["a" /* renderFooter */])(instance, params)

  if (typeof params.onRender === 'function') {
    params.onRender(Object(__WEBPACK_IMPORTED_MODULE_0__getters_js__["o" /* getPopup */])())
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = render;



/***/ }),
/* 40 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_js__ = __webpack_require__(2);




const renderActions = (instance, params) => {
  const actions = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["h" /* getActions */]()
  const confirmButton = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["l" /* getConfirmButton */]()
  const cancelButton = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["i" /* getCancelButton */]()

  // Actions (buttons) wrapper
  if (!params.showConfirmButton && !params.showCancelButton) {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["D" /* hide */](actions)
  }

  // Custom class
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["d" /* applyCustomClass */](actions, params, 'actions')

  // Render confirm button
  renderButton(confirmButton, 'confirm', params)
  // render Cancel Button
  renderButton(cancelButton, 'cancel', params)

  if (params.buttonsStyling) {
    handleButtonsStyling(confirmButton, cancelButton, params)
  } else {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["M" /* removeClass */]([confirmButton, cancelButton], __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].styled)
    confirmButton.style.backgroundColor = confirmButton.style.borderLeftColor = confirmButton.style.borderRightColor = ''
    cancelButton.style.backgroundColor = cancelButton.style.borderLeftColor = cancelButton.style.borderRightColor = ''
  }

  if (params.reverseButtons) {
    confirmButton.parentNode.insertBefore(cancelButton, confirmButton)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderActions;


function handleButtonsStyling (confirmButton, cancelButton, params) {
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */]([confirmButton, cancelButton], __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].styled)

  // Buttons background colors
  if (params.confirmButtonColor) {
    confirmButton.style.backgroundColor = params.confirmButtonColor
  }
  if (params.cancelButtonColor) {
    cancelButton.style.backgroundColor = params.cancelButtonColor
  }

  // Loading state
  const confirmButtonBackgroundColor = window.getComputedStyle(confirmButton).getPropertyValue('background-color')
  confirmButton.style.borderLeftColor = confirmButtonBackgroundColor
  confirmButton.style.borderRightColor = confirmButtonBackgroundColor
}

function renderButton (button, buttonType, params) {
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["Q" /* toggle */](button, params[`show${Object(__WEBPACK_IMPORTED_MODULE_2__utils_js__["b" /* capitalizeFirstLetter */])(buttonType)}Button`], 'inline-block')
  button.innerHTML = params[`${buttonType}ButtonText`] // Set caption text
  button.setAttribute('aria-label', params[`${buttonType}ButtonAriaLabel`]) // ARIA label

  // Add buttons custom classes
  button.className = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][buttonType]
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["d" /* applyCustomClass */](button, params, `${buttonType}Button`)
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */](button, params[`${buttonType}ButtonClass`])
}


/***/ }),
/* 41 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__dom_index_js__ = __webpack_require__(0);




function handleBackdropParam (container, backdrop) {
  if (typeof backdrop === 'string') {
    container.style.background = backdrop
  } else if (!backdrop) {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */]([document.documentElement, document.body], __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['no-backdrop'])
  }
}

function handlePositionParam (container, position) {
  if (position in __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]) {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](container, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][position])
  } else {
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["h" /* warn */])('The "position" parameter is not valid, defaulting to "center"')
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](container, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].center)
  }
}

function handleGrowParam (container, grow) {
  if (grow && typeof grow === 'string') {
    const growClass = `grow-${grow}`
    if (growClass in __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]) {
      __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](container, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][growClass])
    }
  }
}

const renderContainer = (instance, params) => {
  const container = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["m" /* getContainer */]()

  if (!container) {
    return
  }

  handleBackdropParam(container, params.backdrop)

  if (!params.backdrop && params.allowOutsideClick) {
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["h" /* warn */])('"allowOutsideClick" parameter requires `backdrop` parameter to be set to `true`')
  }

  handlePositionParam(container, params.position)
  handleGrowParam(container, params.grow)

  // Custom class
  __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["d" /* applyCustomClass */](container, params, 'container')

  // Set queue step attribute for getQueueStep() method
  const queueStep = document.body.getAttribute('data-swal2-queue-step')
  if (queueStep) {
    container.setAttribute('data-queue-step', queueStep)
    document.body.removeAttribute('data-swal2-queue-step')
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderContainer;



/***/ }),
/* 42 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__renderInput_js__ = __webpack_require__(43);




const renderContent = (instance, params) => {
  const content = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["n" /* getContent */]().querySelector(`#${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].content}`)

  // Content as HTML
  if (params.html) {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["L" /* parseHtmlToContainer */](params.html, content)
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["O" /* show */](content, 'block')

  // Content as plain text
  } else if (params.text) {
    content.textContent = params.text
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["O" /* show */](content, 'block')

  // No content
  } else {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["D" /* hide */](content)
  }

  Object(__WEBPACK_IMPORTED_MODULE_2__renderInput_js__["a" /* renderInput */])(instance, params)

  // Custom class
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["d" /* applyCustomClass */](__WEBPACK_IMPORTED_MODULE_1__dom_index_js__["n" /* getContent */](), params, 'content')
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderContent;



/***/ }),
/* 43 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__privateProps_js__ = __webpack_require__(3);





const inputTypes = ['input', 'file', 'range', 'select', 'radio', 'checkbox', 'textarea']

const renderInput = (instance, params) => {
  const content = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["n" /* getContent */]()
  const innerParams = __WEBPACK_IMPORTED_MODULE_3__privateProps_js__["a" /* default */].innerParams.get(instance)
  const rerender = !innerParams || params.input !== innerParams.input

  inputTypes.forEach((inputType) => {
    const inputClass = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][inputType]
    const inputContainer = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["j" /* getChildByClass */](content, inputClass)

    // set attributes
    setAttributes(inputType, params.inputAttributes)

    // set class
    inputContainer.className = inputClass

    if (rerender) {
      __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["D" /* hide */](inputContainer)
    }
  })

  if (params.input) {
    if (rerender) {
      showInput(params)
    }
    // set custom class
    setCustomClass(params)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderInput;


const showInput = (params) => {
  if (!renderInputType[params.input]) {
    return Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["c" /* error */])(`Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "${params.input}"`)
  }

  const inputContainer = getInputContainer(params.input)
  const input = renderInputType[params.input](inputContainer, params)
  __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["O" /* show */](input)

  // input autofocus
  setTimeout(() => {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["g" /* focusInput */](input)
  })
}

const removeAttributes = (input) => {
  for (let i = 0; i < input.attributes.length; i++) {
    const attrName = input.attributes[i].name
    if (!['type', 'value', 'style'].includes(attrName)) {
      input.removeAttribute(attrName)
    }
  }
}

const setAttributes = (inputType, inputAttributes) => {
  const input = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["v" /* getInput */](__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["n" /* getContent */](), inputType)
  if (!input) {
    return
  }

  removeAttributes(input)

  for (const attr in inputAttributes) {
    // Do not set a placeholder for <input type="range">
    // it'll crash Edge, #1298
    if (inputType === 'range' && attr === 'placeholder') {
      continue
    }

    input.setAttribute(attr, inputAttributes[attr])
  }
}

const setCustomClass = (params) => {
  const inputContainer = getInputContainer(params.input)
  if (params.customClass) {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](inputContainer, params.customClass.input)
  }
}

const setInputPlaceholder = (input, params) => {
  if (!input.placeholder || params.inputPlaceholder) {
    input.placeholder = params.inputPlaceholder
  }
}

const getInputContainer = (inputType) => {
  const inputClass = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][inputType] ? __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */][inputType] : __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].input
  return __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["j" /* getChildByClass */](__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["n" /* getContent */](), inputClass)
}

const renderInputType = {}

renderInputType.text =
renderInputType.email =
renderInputType.password =
renderInputType.number =
renderInputType.tel =
renderInputType.url = (input, params) => {
  if (typeof params.inputValue === 'string' || typeof params.inputValue === 'number') {
    input.value = params.inputValue
  } else if (!Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["d" /* isPromise */])(params.inputValue)) {
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["h" /* warn */])(`Unexpected type of inputValue! Expected "string", "number" or "Promise", got "${typeof params.inputValue}"`)
  }
  setInputPlaceholder(input, params)
  input.type = params.input
  return input
}

renderInputType.file = (input, params) => {
  setInputPlaceholder(input, params)
  return input
}

renderInputType.range = (range, params) => {
  const rangeInput = range.querySelector('input')
  const rangeOutput = range.querySelector('output')
  rangeInput.value = params.inputValue
  rangeInput.type = params.input
  rangeOutput.value = params.inputValue
  return range
}

renderInputType.select = (select, params) => {
  select.innerHTML = ''
  if (params.inputPlaceholder) {
    const placeholder = document.createElement('option')
    placeholder.innerHTML = params.inputPlaceholder
    placeholder.value = ''
    placeholder.disabled = true
    placeholder.selected = true
    select.appendChild(placeholder)
  }
  return select
}

renderInputType.radio = (radio) => {
  radio.innerHTML = ''
  return radio
}

renderInputType.checkbox = (checkboxContainer, params) => {
  const checkbox = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["v" /* getInput */](__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["n" /* getContent */](), 'checkbox')
  checkbox.value = 1
  checkbox.id = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].checkbox
  checkbox.checked = Boolean(params.inputValue)
  const label = checkboxContainer.querySelector('span')
  label.innerHTML = params.inputPlaceholder
  return checkboxContainer
}

renderInputType.textarea = (textarea, params) => {
  textarea.value = params.inputValue
  setInputPlaceholder(textarea, params)

  if ('MutationObserver' in window) { // #1699
    const initialPopupWidth = parseInt(window.getComputedStyle(__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]()).width)
    const popupPadding = parseInt(window.getComputedStyle(__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]()).paddingLeft) + parseInt(window.getComputedStyle(__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]()).paddingRight)
    const outputsize = () => {
      const contentWidth = textarea.offsetWidth + popupPadding
      if (contentWidth > initialPopupWidth) {
        __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]().style.width = `${contentWidth}px`
      } else {
        __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]().style.width = null
      }
    }
    new MutationObserver(outputsize).observe(textarea, {
      attributes: true, attributeFilter: ['style']
    })
  }

  return textarea
}


/***/ }),
/* 44 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);


const renderFooter = (instance, params) => {
  const footer = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["p" /* getFooter */]()

  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["Q" /* toggle */](footer, params.footer)

  if (params.footer) {
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["L" /* parseHtmlToContainer */](params.footer, footer)
  }

  // Custom class
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["d" /* applyCustomClass */](footer, params, 'footer')
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderFooter;



/***/ }),
/* 45 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__renderCloseButton_js__ = __webpack_require__(46);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__renderIcon_js__ = __webpack_require__(47);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__renderImage_js__ = __webpack_require__(48);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__renderProgressSteps_js__ = __webpack_require__(49);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__renderTitle_js__ = __webpack_require__(50);







const renderHeader = (instance, params) => {
  const header = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["q" /* getHeader */]()

  // Custom class
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["d" /* applyCustomClass */](header, params, 'header')

  // Progress steps
  Object(__WEBPACK_IMPORTED_MODULE_4__renderProgressSteps_js__["a" /* renderProgressSteps */])(instance, params)

  // Icon
  Object(__WEBPACK_IMPORTED_MODULE_2__renderIcon_js__["a" /* renderIcon */])(instance, params)

  // Image
  Object(__WEBPACK_IMPORTED_MODULE_3__renderImage_js__["a" /* renderImage */])(instance, params)

  // Title
  Object(__WEBPACK_IMPORTED_MODULE_5__renderTitle_js__["a" /* renderTitle */])(instance, params)

  // Close button
  Object(__WEBPACK_IMPORTED_MODULE_1__renderCloseButton_js__["a" /* renderCloseButton */])(instance, params)
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderHeader;



/***/ }),
/* 46 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);


const renderCloseButton = (instance, params) => {
  const closeButton = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["k" /* getCloseButton */]()

  closeButton.innerHTML = params.closeButtonHtml

  // Custom class
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["d" /* applyCustomClass */](closeButton, params, 'closeButton')

  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["Q" /* toggle */](closeButton, params.showCloseButton)
  closeButton.setAttribute('aria-label', params.closeButtonAriaLabel)
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderCloseButton;



/***/ }),
/* 47 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__privateProps_js__ = __webpack_require__(3);





const renderIcon = (instance, params) => {
  const innerParams = __WEBPACK_IMPORTED_MODULE_3__privateProps_js__["a" /* default */].innerParams.get(instance)

  // if the give icon already rendered, apply the custom class without re-rendering the icon
  if (innerParams && params.icon === innerParams.icon && __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["s" /* getIcon */]()) {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["d" /* applyCustomClass */](__WEBPACK_IMPORTED_MODULE_2__dom_index_js__["s" /* getIcon */](), params, 'icon')
    return
  }

  hideAllIcons()

  if (!params.icon) {
    return
  }

  if (Object.keys(__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */]).indexOf(params.icon) !== -1) {
    const icon = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["f" /* elementBySelector */](`.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].icon}.${__WEBPACK_IMPORTED_MODULE_0__classes_js__["a" /* iconTypes */][params.icon]}`)
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["O" /* show */](icon)

    // Custom or default content
    setContent(icon, params)
    adjustSuccessIconBackgoundColor()

    // Custom class
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["d" /* applyCustomClass */](icon, params, 'icon')

    // Animate icon
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](icon, params.showClass.icon)
  } else {
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["c" /* error */])(`Unknown icon! Expected "success", "error", "warning", "info" or "question", got "${params.icon}"`)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderIcon;


const hideAllIcons = () => {
  const icons = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["t" /* getIcons */]()
  for (let i = 0; i < icons.length; i++) {
    __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["D" /* hide */](icons[i])
  }
}

// Adjust success icon background color to match the popup background color
const adjustSuccessIconBackgoundColor = () => {
  const popup = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["w" /* getPopup */]()
  const popupBackgroundColor = window.getComputedStyle(popup).getPropertyValue('background-color')
  const successIconParts = popup.querySelectorAll('[class^=swal2-success-circular-line], .swal2-success-fix')
  for (let i = 0; i < successIconParts.length; i++) {
    successIconParts[i].style.backgroundColor = popupBackgroundColor
  }
}

const setContent = (icon, params) => {
  icon.innerHTML = ''

  if (params.iconHtml) {
    icon.innerHTML = iconContent(params.iconHtml)
  } else if (params.icon === 'success') {
    icon.innerHTML = `
      <div class="swal2-success-circular-line-left"></div>
      <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
      <div class="swal2-success-ring"></div> <div class="swal2-success-fix"></div>
      <div class="swal2-success-circular-line-right"></div>
    `
  } else if (params.icon === 'error') {
    icon.innerHTML = `
      <span class="swal2-x-mark">
        <span class="swal2-x-mark-line-left"></span>
        <span class="swal2-x-mark-line-right"></span>
      </span>
    `
  } else {
    const defaultIconHtml = {
      question: '?',
      warning: '!',
      info: 'i'
    }
    icon.innerHTML = iconContent(defaultIconHtml[params.icon])
  }
}

const iconContent = (content) => `<div class="${__WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['icon-content']}">${content}</div>`


/***/ }),
/* 48 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_index_js__ = __webpack_require__(0);



const renderImage = (instance, params) => {
  const image = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["u" /* getImage */]()

  if (!params.imageUrl) {
    return __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["D" /* hide */](image)
  }

  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["O" /* show */](image)

  // Src, alt
  image.setAttribute('src', params.imageUrl)
  image.setAttribute('alt', params.imageAlt)

  // Width, height
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["e" /* applyNumericalStyle */](image, 'width', params.imageWidth)
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["e" /* applyNumericalStyle */](image, 'height', params.imageHeight)

  // Class
  image.className = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].image
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["d" /* applyCustomClass */](image, params, 'image')
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderImage;



/***/ }),
/* 49 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__staticMethods_queue_js__ = __webpack_require__(12);





const createStepElement = (step) => {
  const stepEl = document.createElement('li')
  __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](stepEl, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['progress-step'])
  stepEl.innerHTML = step
  return stepEl
}

const createLineElement = (params) => {
  const lineEl = document.createElement('li')
  __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](lineEl, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['progress-step-line'])
  if (params.progressStepsDistance) {
    lineEl.style.width = params.progressStepsDistance
  }
  return lineEl
}

const renderProgressSteps = (instance, params) => {
  const progressStepsContainer = __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["x" /* getProgressSteps */]()
  if (!params.progressSteps || params.progressSteps.length === 0) {
    return __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["D" /* hide */](progressStepsContainer)
  }

  __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["O" /* show */](progressStepsContainer)
  progressStepsContainer.innerHTML = ''
  const currentProgressStep = parseInt(params.currentProgressStep === undefined ? Object(__WEBPACK_IMPORTED_MODULE_3__staticMethods_queue_js__["b" /* getQueueStep */])() : params.currentProgressStep)
  if (currentProgressStep >= params.progressSteps.length) {
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_js__["h" /* warn */])(
      'Invalid currentProgressStep parameter, it should be less than progressSteps.length ' +
      '(currentProgressStep like JS arrays starts from 0)'
    )
  }

  params.progressSteps.forEach((step, index) => {
    const stepEl = createStepElement(step)
    progressStepsContainer.appendChild(stepEl)
    if (index === currentProgressStep) {
      __WEBPACK_IMPORTED_MODULE_2__dom_index_js__["a" /* addClass */](stepEl, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['active-progress-step'])
    }

    if (index !== params.progressSteps.length - 1) {
      const lineEl = createLineElement(step)
      progressStepsContainer.appendChild(lineEl)
    }
  })
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderProgressSteps;



/***/ }),
/* 50 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);


const renderTitle = (instance, params) => {
  const title = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["z" /* getTitle */]()

  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["Q" /* toggle */](title, params.title || params.titleText)

  if (params.title) {
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["L" /* parseHtmlToContainer */](params.title, title)
  }

  if (params.titleText) {
    title.innerText = params.titleText
  }

  // Custom class
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["d" /* applyCustomClass */](title, params, 'title')
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderTitle;



/***/ }),
/* 51 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_index_js__ = __webpack_require__(0);



const renderPopup = (instance, params) => {
  const popup = __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["w" /* getPopup */]()

  // Width
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["e" /* applyNumericalStyle */](popup, 'width', params.width)

  // Padding
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["e" /* applyNumericalStyle */](popup, 'padding', params.padding)

  // Background
  if (params.background) {
    popup.style.background = params.background
  }

  // Default Class
  popup.className = __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].popup
  if (params.toast) {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */]([document.documentElement, document.body], __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */]['toast-shown'])
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */](popup, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].toast)
  } else {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */](popup, __WEBPACK_IMPORTED_MODULE_0__classes_js__["b" /* swalClasses */].modal)
  }

  // Custom class
  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["d" /* applyCustomClass */](popup, params, 'popup')
  if (typeof params.customClass === 'string') {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */](popup, params.customClass)
  }

  // Add showClass when updating Swal.update({})
  if (__WEBPACK_IMPORTED_MODULE_1__dom_index_js__["J" /* isVisible */](popup)) {
    __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["a" /* addClass */](popup, params.showClass.popup)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = renderPopup;



/***/ }),
/* 52 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = fire;
function fire (...args) {
  const Swal = this
  return new Swal(...args)
}


/***/ }),
/* 53 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = mixin;
/**
 * Returns an extended version of `Swal` containing `params` as defaults.
 * Useful for reusing Swal configuration.
 *
 * For example:
 *
 * Before:
 * const textPromptOptions = { input: 'text', showCancelButton: true }
 * const {value: firstName} = await Swal.fire({ ...textPromptOptions, title: 'What is your first name?' })
 * const {value: lastName} = await Swal.fire({ ...textPromptOptions, title: 'What is your last name?' })
 *
 * After:
 * const TextPrompt = Swal.mixin({ input: 'text', showCancelButton: true })
 * const {value: firstName} = await TextPrompt('What is your first name?')
 * const {value: lastName} = await TextPrompt('What is your last name?')
 *
 * @param mixinParams
 */
function mixin (mixinParams) {
  class MixinSwal extends this {
    _main (params) {
      return super._main(Object.assign({}, mixinParams, params))
    }
  }

  return MixinSwal
}


/***/ }),
/* 54 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__globalState_js__ = __webpack_require__(8);



/**
 * If `timer` parameter is set, returns number of milliseconds of timer remained.
 * Otherwise, returns undefined.
 */
const getTimerLeft = () => {
  return __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout && __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout.getTimerLeft()
}
/* harmony export (immutable) */ __webpack_exports__["a"] = getTimerLeft;


/**
 * Stop timer. Returns number of milliseconds of timer remained.
 * If `timer` parameter isn't set, returns undefined.
 */
const stopTimer = () => {
  if (__WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__["q" /* stopTimerProgressBar */])()
    return __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout.stop()
  }
}
/* harmony export (immutable) */ __webpack_exports__["e"] = stopTimer;


/**
 * Resume timer. Returns number of milliseconds of timer remained.
 * If `timer` parameter isn't set, returns undefined.
 */
const resumeTimer = () => {
  if (__WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout) {
    const remaining = __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout.start()
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__["b" /* animateTimerProgressBar */])(remaining)
    return remaining
  }
}
/* harmony export (immutable) */ __webpack_exports__["d"] = resumeTimer;


/**
 * Resume timer. Returns number of milliseconds of timer remained.
 * If `timer` parameter isn't set, returns undefined.
 */
const toggleTimer = () => {
  const timer = __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout
  return timer && (timer.running ? stopTimer() : resumeTimer())
}
/* harmony export (immutable) */ __webpack_exports__["f"] = toggleTimer;


/**
 * Increase timer. Returns number of milliseconds of an updated timer.
 * If `timer` parameter isn't set, returns undefined.
 */
const increaseTimer = (n) => {
  if (__WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout) {
    const remaining = __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout.increase(n)
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__["b" /* animateTimerProgressBar */])(remaining, true)
    return remaining
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = increaseTimer;


/**
 * Check if timer is running. Returns true if timer is running
 * or false if timer is paused or stopped.
 * If `timer` parameter isn't set, returns undefined
 */
const isTimerRunning = () => {
  return __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout && __WEBPACK_IMPORTED_MODULE_1__globalState_js__["a" /* default */].timeout.isRunning()
}
/* harmony export (immutable) */ __webpack_exports__["c"] = isTimerRunning;



/***/ }),
/* 55 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
const RESTORE_FOCUS_TIMEOUT = 100
/* harmony export (immutable) */ __webpack_exports__["a"] = RESTORE_FOCUS_TIMEOUT;



/***/ }),
/* 56 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__instanceMethods_hideLoading_js__ = __webpack_require__(57);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "hideLoading", function() { return __WEBPACK_IMPORTED_MODULE_0__instanceMethods_hideLoading_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "disableLoading", function() { return __WEBPACK_IMPORTED_MODULE_0__instanceMethods_hideLoading_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__instanceMethods_getInput_js__ = __webpack_require__(58);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getInput", function() { return __WEBPACK_IMPORTED_MODULE_1__instanceMethods_getInput_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__instanceMethods_close_js__ = __webpack_require__(59);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "close", function() { return __WEBPACK_IMPORTED_MODULE_2__instanceMethods_close_js__["a"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "closePopup", function() { return __WEBPACK_IMPORTED_MODULE_2__instanceMethods_close_js__["c"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "closeModal", function() { return __WEBPACK_IMPORTED_MODULE_2__instanceMethods_close_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "closeToast", function() { return __WEBPACK_IMPORTED_MODULE_2__instanceMethods_close_js__["d"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__instanceMethods_enable_disable_elements_js__ = __webpack_require__(60);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "enableButtons", function() { return __WEBPACK_IMPORTED_MODULE_3__instanceMethods_enable_disable_elements_js__["c"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "disableButtons", function() { return __WEBPACK_IMPORTED_MODULE_3__instanceMethods_enable_disable_elements_js__["a"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "enableInput", function() { return __WEBPACK_IMPORTED_MODULE_3__instanceMethods_enable_disable_elements_js__["d"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "disableInput", function() { return __WEBPACK_IMPORTED_MODULE_3__instanceMethods_enable_disable_elements_js__["b"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__instanceMethods_show_reset_validation_error_js__ = __webpack_require__(61);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "showValidationMessage", function() { return __WEBPACK_IMPORTED_MODULE_4__instanceMethods_show_reset_validation_error_js__["b"]; });
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "resetValidationMessage", function() { return __WEBPACK_IMPORTED_MODULE_4__instanceMethods_show_reset_validation_error_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__instanceMethods_progress_steps_js__ = __webpack_require__(62);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "getProgressSteps", function() { return __WEBPACK_IMPORTED_MODULE_5__instanceMethods_progress_steps_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__instanceMethods_main_js__ = __webpack_require__(63);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "_main", function() { return __WEBPACK_IMPORTED_MODULE_6__instanceMethods_main_js__["a"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__instanceMethods_update_js__ = __webpack_require__(71);
/* harmony namespace reexport (by provided) */ __webpack_require__.d(__webpack_exports__, "update", function() { return __WEBPACK_IMPORTED_MODULE_7__instanceMethods_update_js__["a"]; });










/***/ }),
/* 57 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return hideLoading; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return hideLoading; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__privateProps_js__ = __webpack_require__(3);




/**
 * Enables buttons and hide loader.
 */
function hideLoading () {
  // do nothing if popup is closed
  const innerParams = __WEBPACK_IMPORTED_MODULE_2__privateProps_js__["a" /* default */].innerParams.get(this)
  if (!innerParams) {
    return
  }
  const domCache = __WEBPACK_IMPORTED_MODULE_2__privateProps_js__["a" /* default */].domCache.get(this)
  if (!innerParams.showConfirmButton) {
    __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["D" /* hide */](domCache.confirmButton)
    if (!innerParams.showCancelButton) {
      __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["D" /* hide */](domCache.actions)
    }
  }
  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["M" /* removeClass */]([domCache.popup, domCache.actions], __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].loading)
  domCache.popup.removeAttribute('aria-busy')
  domCache.popup.removeAttribute('data-loading')
  domCache.confirmButton.disabled = false
  domCache.cancelButton.disabled = false
}




/***/ }),
/* 58 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getInput;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__privateProps_js__ = __webpack_require__(3);



// Get input element by specified type or, if type isn't specified, by params.input
function getInput (instance) {
  const innerParams = __WEBPACK_IMPORTED_MODULE_1__privateProps_js__["a" /* default */].innerParams.get(instance || this)
  const domCache = __WEBPACK_IMPORTED_MODULE_1__privateProps_js__["a" /* default */].domCache.get(instance || this)
  if (!domCache) {
    return null
  }
  return __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["v" /* getInput */](domCache.content, innerParams.input)
}


/***/ }),
/* 59 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = close;
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "c", function() { return close; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return close; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "d", function() { return close; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_scrollbarFix_js__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_iosFix_js__ = __webpack_require__(15);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_ieFix_js__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__utils_aria_js__ = __webpack_require__(17);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__globalState_js__ = __webpack_require__(8);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__privateProps_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__privateMethods_js__ = __webpack_require__(18);










/*
 * Instance method to close sweetAlert
 */

function removePopupAndResetState (instance, container, isToast, onAfterClose) {
  if (isToast) {
    triggerOnAfterCloseAndDispose(instance, onAfterClose)
  } else {
    Object(__WEBPACK_IMPORTED_MODULE_6__globalState_js__["b" /* restoreActiveElement */])().then(() => triggerOnAfterCloseAndDispose(instance, onAfterClose))
    __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownTarget.removeEventListener('keydown', __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownHandler, { capture: __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownListenerCapture })
    __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownHandlerAdded = false
  }

  if (container.parentNode) {
    container.parentNode.removeChild(container)
  }

  if (__WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["G" /* isModal */]()) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_scrollbarFix_js__["b" /* undoScrollbar */])()
    Object(__WEBPACK_IMPORTED_MODULE_1__utils_iosFix_js__["b" /* undoIOSfix */])()
    Object(__WEBPACK_IMPORTED_MODULE_2__utils_ieFix_js__["b" /* undoIEfix */])()
    Object(__WEBPACK_IMPORTED_MODULE_3__utils_aria_js__["b" /* unsetAriaHidden */])()
  }

  removeBodyClasses()
}

function removeBodyClasses () {
  __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["M" /* removeClass */](
    [document.documentElement, document.body],
    [
      __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__["b" /* swalClasses */].shown,
      __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__["b" /* swalClasses */]['height-auto'],
      __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__["b" /* swalClasses */]['no-backdrop'],
      __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__["b" /* swalClasses */]['toast-shown'],
      __WEBPACK_IMPORTED_MODULE_5__utils_classes_js__["b" /* swalClasses */]['toast-column']
    ]
  )
}

function disposeSwal (instance) {
  // Unset this.params so GC will dispose it (#1569)
  delete instance.params
  // Unset globalState props so GC will dispose globalState (#1569)
  delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownHandler
  delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].keydownTarget
  // Unset WeakMaps so GC will be able to dispose them (#1569)
  unsetWeakMaps(__WEBPACK_IMPORTED_MODULE_7__privateProps_js__["a" /* default */])
  unsetWeakMaps(__WEBPACK_IMPORTED_MODULE_8__privateMethods_js__["a" /* default */])
}

function close (resolveValue) {
  const popup = __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["w" /* getPopup */]()

  if (!popup) {
    return
  }

  const innerParams = __WEBPACK_IMPORTED_MODULE_7__privateProps_js__["a" /* default */].innerParams.get(this)
  if (!innerParams || __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["B" /* hasClass */](popup, innerParams.hideClass.popup)) {
    return
  }
  const swalPromiseResolve = __WEBPACK_IMPORTED_MODULE_8__privateMethods_js__["a" /* default */].swalPromiseResolve.get(this)

  __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["M" /* removeClass */](popup, innerParams.showClass.popup)
  __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["a" /* addClass */](popup, innerParams.hideClass.popup)

  const backdrop = __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["m" /* getContainer */]()
  __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["M" /* removeClass */](backdrop, innerParams.showClass.backdrop)
  __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["a" /* addClass */](backdrop, innerParams.hideClass.backdrop)

  handlePopupAnimation(this, popup, innerParams)

  // Resolve Swal promise
  swalPromiseResolve(resolveValue || {})
}

const handlePopupAnimation = (instance, popup, innerParams) => {
  const container = __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["m" /* getContainer */]()
  // If animation is supported, animate
  const animationIsSupported = __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["c" /* animationEndEvent */] && __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["C" /* hasCssAnimation */](popup)

  const { onClose, onAfterClose } = innerParams

  if (onClose !== null && typeof onClose === 'function') {
    onClose(popup)
  }

  if (animationIsSupported) {
    animatePopup(instance, popup, container, onAfterClose)
  } else {
    // Otherwise, remove immediately
    removePopupAndResetState(instance, container, __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["I" /* isToast */](), onAfterClose)
  }
}

const animatePopup = (instance, popup, container, onAfterClose) => {
  __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback = removePopupAndResetState.bind(null, instance, container, __WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["I" /* isToast */](), onAfterClose)
  popup.addEventListener(__WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["c" /* animationEndEvent */], function (e) {
    if (e.target === popup) {
      __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback()
      delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback
    }
  })
}

const unsetWeakMaps = (obj) => {
  for (const i in obj) {
    obj[i] = new WeakMap()
  }
}

const triggerOnAfterCloseAndDispose = (instance, onAfterClose) => {
  setTimeout(() => {
    if (onAfterClose !== null && typeof onAfterClose === 'function') {
      onAfterClose()
    }
    if (!__WEBPACK_IMPORTED_MODULE_4__utils_dom_index_js__["w" /* getPopup */]()) {
      disposeSwal(instance)
    }
  })
}




/***/ }),
/* 60 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["c"] = enableButtons;
/* harmony export (immutable) */ __webpack_exports__["a"] = disableButtons;
/* harmony export (immutable) */ __webpack_exports__["d"] = enableInput;
/* harmony export (immutable) */ __webpack_exports__["b"] = disableInput;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__privateProps_js__ = __webpack_require__(3);


function setButtonsDisabled (instance, buttons, disabled) {
  const domCache = __WEBPACK_IMPORTED_MODULE_0__privateProps_js__["a" /* default */].domCache.get(instance)
  buttons.forEach(button => {
    domCache[button].disabled = disabled
  })
}

function setInputDisabled (input, disabled) {
  if (!input) {
    return false
  }
  if (input.type === 'radio') {
    const radiosContainer = input.parentNode.parentNode
    const radios = radiosContainer.querySelectorAll('input')
    for (let i = 0; i < radios.length; i++) {
      radios[i].disabled = disabled
    }
  } else {
    input.disabled = disabled
  }
}

function enableButtons () {
  setButtonsDisabled(this, ['confirmButton', 'cancelButton'], false)
}

function disableButtons () {
  setButtonsDisabled(this, ['confirmButton', 'cancelButton'], true)
}

function enableInput () {
  return setInputDisabled(this.getInput(), false)
}

function disableInput () {
  return setInputDisabled(this.getInput(), true)
}


/***/ }),
/* 61 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["b"] = showValidationMessage;
/* harmony export (immutable) */ __webpack_exports__["a"] = resetValidationMessage;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__privateProps_js__ = __webpack_require__(3);




// Show block with validation message
function showValidationMessage (error) {
  const domCache = __WEBPACK_IMPORTED_MODULE_2__privateProps_js__["a" /* default */].domCache.get(this)
  domCache.validationMessage.innerHTML = error
  const popupComputedStyle = window.getComputedStyle(domCache.popup)
  domCache.validationMessage.style.marginLeft = `-${popupComputedStyle.getPropertyValue('padding-left')}`
  domCache.validationMessage.style.marginRight = `-${popupComputedStyle.getPropertyValue('padding-right')}`
  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["O" /* show */](domCache.validationMessage)

  const input = this.getInput()
  if (input) {
    input.setAttribute('aria-invalid', true)
    input.setAttribute('aria-describedBy', __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */]['validation-message'])
    __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["g" /* focusInput */](input)
    __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["a" /* addClass */](input, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].inputerror)
  }
}

// Hide block with validation message
function resetValidationMessage () {
  const domCache = __WEBPACK_IMPORTED_MODULE_2__privateProps_js__["a" /* default */].domCache.get(this)
  if (domCache.validationMessage) {
    __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["D" /* hide */](domCache.validationMessage)
  }

  const input = this.getInput()
  if (input) {
    input.removeAttribute('aria-invalid')
    input.removeAttribute('aria-describedBy')
    __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["M" /* removeClass */](input, __WEBPACK_IMPORTED_MODULE_1__utils_classes_js__["b" /* swalClasses */].inputerror)
  }
}


/***/ }),
/* 62 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getProgressSteps;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__privateProps_js__ = __webpack_require__(3);


function getProgressSteps () {
  const domCache = __WEBPACK_IMPORTED_MODULE_0__privateProps_js__["a" /* default */].domCache.get(this)
  return domCache.progressSteps
}


/***/ }),
/* 63 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = _main;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_params_js__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__utils_Timer_js__ = __webpack_require__(64);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__utils_utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__utils_setParameters_js__ = __webpack_require__(65);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__globalState_js__ = __webpack_require__(8);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__utils_openPopup_js__ = __webpack_require__(67);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__privateProps_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__privateMethods_js__ = __webpack_require__(18);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__utils_dom_inputUtils_js__ = __webpack_require__(19);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__buttons_handlers_js__ = __webpack_require__(68);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__keydown_handler_js__ = __webpack_require__(69);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__popup_click_handler_js__ = __webpack_require__(70);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__utils_DismissReason_js__ = __webpack_require__(6);
















function _main (userParams) {
  Object(__WEBPACK_IMPORTED_MODULE_0__utils_params_js__["e" /* showWarningsForParams */])(userParams)

  // Check if there is another Swal closing
  if (__WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["w" /* getPopup */]() && __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback) {
    __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback()
    delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].swalCloseEventFinishedCallback
  }

  // Check if there is a swal disposal defer timer
  if (__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].deferDisposalTimer) {
    clearTimeout(__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].deferDisposalTimer)
    delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].deferDisposalTimer
  }

  const innerParams = prepareParams(userParams)
  Object(__WEBPACK_IMPORTED_MODULE_5__utils_setParameters_js__["a" /* default */])(innerParams)
  Object.freeze(innerParams)

  // clear the previous timer
  if (__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].timeout) {
    __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].timeout.stop()
    delete __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].timeout
  }

  // clear the restore focus timeout
  clearTimeout(__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].restoreFocusTimeout)

  const domCache = populateDomCache(this)

  __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["N" /* render */](this, innerParams)

  __WEBPACK_IMPORTED_MODULE_8__privateProps_js__["a" /* default */].innerParams.set(this, innerParams)

  return swalPromise(this, domCache, innerParams)
}

const prepareParams = (userParams) => {
  const showClass = Object.assign({}, __WEBPACK_IMPORTED_MODULE_0__utils_params_js__["a" /* default */].showClass, userParams.showClass)
  const hideClass = Object.assign({}, __WEBPACK_IMPORTED_MODULE_0__utils_params_js__["a" /* default */].hideClass, userParams.hideClass)
  const params = Object.assign({}, __WEBPACK_IMPORTED_MODULE_0__utils_params_js__["a" /* default */], userParams)
  params.showClass = showClass
  params.hideClass = hideClass
  // @deprecated
  if (userParams.animation === false) {
    params.showClass = {
      popup: '',
      backdrop: 'swal2-backdrop-show swal2-noanimation'
    }
    params.hideClass = {}
  }
  return params
}

const swalPromise = (instance, domCache, innerParams) => {
  return new Promise((resolve) => {
    // functions to handle all closings/dismissals
    const dismissWith = (dismiss) => {
      instance.closePopup({ dismiss })
    }

    __WEBPACK_IMPORTED_MODULE_9__privateMethods_js__["a" /* default */].swalPromiseResolve.set(instance, resolve)

    setupTimer(__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */], innerParams, dismissWith)

    domCache.confirmButton.onclick = () => Object(__WEBPACK_IMPORTED_MODULE_11__buttons_handlers_js__["b" /* handleConfirmButtonClick */])(instance, innerParams)
    domCache.cancelButton.onclick = () => Object(__WEBPACK_IMPORTED_MODULE_11__buttons_handlers_js__["a" /* handleCancelButtonClick */])(instance, dismissWith)

    domCache.closeButton.onclick = () => dismissWith(__WEBPACK_IMPORTED_MODULE_14__utils_DismissReason_js__["a" /* DismissReason */].close)

    Object(__WEBPACK_IMPORTED_MODULE_13__popup_click_handler_js__["a" /* handlePopupClick */])(domCache, innerParams, dismissWith)

    Object(__WEBPACK_IMPORTED_MODULE_12__keydown_handler_js__["a" /* addKeydownHandler */])(instance, __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */], innerParams, dismissWith)

    if (innerParams.toast && (innerParams.input || innerParams.footer || innerParams.showCloseButton)) {
      __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["a" /* addClass */](document.body, __WEBPACK_IMPORTED_MODULE_2__utils_classes_js__["b" /* swalClasses */]['toast-column'])
    } else {
      __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["M" /* removeClass */](document.body, __WEBPACK_IMPORTED_MODULE_2__utils_classes_js__["b" /* swalClasses */]['toast-column'])
    }

    Object(__WEBPACK_IMPORTED_MODULE_10__utils_dom_inputUtils_js__["b" /* handleInputOptionsAndValue */])(instance, innerParams)

    Object(__WEBPACK_IMPORTED_MODULE_7__utils_openPopup_js__["a" /* openPopup */])(innerParams)

    initFocus(domCache, innerParams)

    // Scroll container to top on open (#1247)
    domCache.container.scrollTop = 0
  })
}

const populateDomCache = (instance) => {
  const domCache = {
    popup: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["w" /* getPopup */](),
    container: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["m" /* getContainer */](),
    content: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["n" /* getContent */](),
    actions: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["h" /* getActions */](),
    confirmButton: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["l" /* getConfirmButton */](),
    cancelButton: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["i" /* getCancelButton */](),
    closeButton: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["k" /* getCloseButton */](),
    validationMessage: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["A" /* getValidationMessage */](),
    progressSteps: __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["x" /* getProgressSteps */]()
  }
  __WEBPACK_IMPORTED_MODULE_8__privateProps_js__["a" /* default */].domCache.set(instance, domCache)

  return domCache
}

const setupTimer = (globalState, innerParams, dismissWith) => {
  const timerProgressBar = __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["y" /* getTimerProgressBar */]()
  __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["D" /* hide */](timerProgressBar)
  if (innerParams.timer) {
    globalState.timeout = new __WEBPACK_IMPORTED_MODULE_3__utils_Timer_js__["a" /* default */](() => {
      dismissWith('timer')
      delete globalState.timeout
    }, innerParams.timer)
    if (innerParams.timerProgressBar) {
      __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["O" /* show */](timerProgressBar)
      setTimeout(() => {
        __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["b" /* animateTimerProgressBar */](innerParams.timer)
      })
    }
  }
}

const initFocus = (domCache, innerParams) => {
  if (innerParams.toast) {
    return
  }

  if (!Object(__WEBPACK_IMPORTED_MODULE_4__utils_utils_js__["a" /* callIfFunction */])(innerParams.allowEnterKey)) {
    return blurActiveElement()
  }

  if (innerParams.focusCancel && __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["J" /* isVisible */](domCache.cancelButton)) {
    return domCache.cancelButton.focus()
  }

  if (innerParams.focusConfirm && __WEBPACK_IMPORTED_MODULE_1__utils_dom_index_js__["J" /* isVisible */](domCache.confirmButton)) {
    return domCache.confirmButton.focus()
  }

  Object(__WEBPACK_IMPORTED_MODULE_12__keydown_handler_js__["b" /* setFocus */])(innerParams, -1, 1)
}

const blurActiveElement = () => {
  if (document.activeElement && typeof document.activeElement.blur === 'function') {
    document.activeElement.blur()
  }
}


/***/ }),
/* 64 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
class Timer {
  constructor (callback, delay) {
    this.callback = callback
    this.remaining = delay
    this.running = false

    this.start()
  }

  start () {
    if (!this.running) {
      this.running = true
      this.started = new Date()
      this.id = setTimeout(this.callback, this.remaining)
    }
    return this.remaining
  }

  stop () {
    if (this.running) {
      this.running = false
      clearTimeout(this.id)
      this.remaining -= new Date() - this.started
    }
    return this.remaining
  }

  increase (n) {
    const running = this.running
    if (running) {
      this.stop()
    }
    this.remaining += n
    if (running) {
      this.start()
    }
    return this.remaining
  }

  getTimerLeft () {
    if (this.running) {
      this.stop()
      this.start()
    }
    return this.remaining
  }

  isRunning () {
    return this.running
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = Timer;



/***/ }),
/* 65 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = setParameters;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__defaultInputValidators_js__ = __webpack_require__(66);




function setDefaultInputValidators (params) {
  // Use default `inputValidator` for supported input types if not provided
  if (!params.inputValidator) {
    Object.keys(__WEBPACK_IMPORTED_MODULE_2__defaultInputValidators_js__["a" /* default */]).forEach((key) => {
      if (params.input === key) {
        params.inputValidator = __WEBPACK_IMPORTED_MODULE_2__defaultInputValidators_js__["a" /* default */][key]
      }
    })
  }
}

function validateCustomTargetElement (params) {
  // Determine if the custom target element is valid
  if (
    !params.target ||
    (typeof params.target === 'string' && !document.querySelector(params.target)) ||
    (typeof params.target !== 'string' && !params.target.appendChild)
  ) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_js__["h" /* warn */])('Target parameter is not valid, defaulting to "body"')
    params.target = 'body'
  }
}

/**
 * Set type, text and actions on popup
 *
 * @param params
 * @returns {boolean}
 */
function setParameters (params) {
  setDefaultInputValidators(params)

  // showLoaderOnConfirm && preConfirm
  if (params.showLoaderOnConfirm && !params.preConfirm) {
    Object(__WEBPACK_IMPORTED_MODULE_0__utils_js__["h" /* warn */])(
      'showLoaderOnConfirm is set to true, but preConfirm is not defined.\n' +
      'showLoaderOnConfirm should be used together with preConfirm, see usage example:\n' +
      'https://sweetalert2.github.io/#ajax-request'
    )
  }

  // params.animation will be actually used in renderPopup.js
  // but in case when params.animation is a function, we need to call that function
  // before popup (re)initialization, so it'll be possible to check Swal.isVisible()
  // inside the params.animation function
  params.animation = Object(__WEBPACK_IMPORTED_MODULE_0__utils_js__["a" /* callIfFunction */])(params.animation)

  validateCustomTargetElement(params)

  // Replace newlines with <br> in title
  if (typeof params.title === 'string') {
    params.title = params.title.split('\n').join('<br />')
  }

  __WEBPACK_IMPORTED_MODULE_1__dom_index_js__["E" /* init */](params)
}


/***/ }),
/* 66 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
  email: (string, validationMessage) => {
    return /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9-]{2,24}$/.test(string)
      ? Promise.resolve()
      : Promise.resolve(validationMessage || 'Invalid email address')
  },
  url: (string, validationMessage) => {
    // taken from https://stackoverflow.com/a/3809435 with a small change from #1306
    return /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._+~#=]{2,256}\.[a-z]{2,63}\b([-a-zA-Z0-9@:%_+.~#?&/=]*)$/.test(string)
      ? Promise.resolve()
      : Promise.resolve(validationMessage || 'Invalid URL')
  }
});


/***/ }),
/* 67 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__classes_js__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__scrollbarFix_js__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__iosFix_js__ = __webpack_require__(15);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__ieFix_js__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__aria_js__ = __webpack_require__(17);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__globalState_js__ = __webpack_require__(8);








function swalOpenAnimationFinished (popup, container) {
  popup.removeEventListener(__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["c" /* animationEndEvent */], swalOpenAnimationFinished)
  container.style.overflowY = 'auto'
}

/**
 * Open popup, add necessary classes and styles, fix scrollbar
 *
 * @param {Array} params
 */
const openPopup = (params) => {
  const container = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["m" /* getContainer */]()
  const popup = __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["w" /* getPopup */]()

  if (typeof params.onBeforeOpen === 'function') {
    params.onBeforeOpen(popup)
  }

  addClasses(container, popup, params)

  // scrolling is 'hidden' until animation is done, after that 'auto'
  setScrollingVisibility(container, popup)

  if (__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["G" /* isModal */]()) {
    fixScrollContainer(container, params.scrollbarPadding)
  }

  if (!__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["I" /* isToast */]() && !__WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].previousActiveElement) {
    __WEBPACK_IMPORTED_MODULE_6__globalState_js__["a" /* default */].previousActiveElement = document.activeElement
  }
  if (typeof params.onOpen === 'function') {
    setTimeout(() => params.onOpen(popup))
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = openPopup;


const setScrollingVisibility = (container, popup) => {
  if (__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["c" /* animationEndEvent */] && __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["C" /* hasCssAnimation */](popup)) {
    container.style.overflowY = 'hidden'
    popup.addEventListener(__WEBPACK_IMPORTED_MODULE_0__dom_index_js__["c" /* animationEndEvent */], swalOpenAnimationFinished.bind(null, popup, container))
  } else {
    container.style.overflowY = 'auto'
  }
}

const fixScrollContainer = (container, scrollbarPadding) => {
  Object(__WEBPACK_IMPORTED_MODULE_3__iosFix_js__["a" /* iOSfix */])()
  Object(__WEBPACK_IMPORTED_MODULE_4__ieFix_js__["a" /* IEfix */])()
  Object(__WEBPACK_IMPORTED_MODULE_5__aria_js__["a" /* setAriaHidden */])()

  if (scrollbarPadding) {
    Object(__WEBPACK_IMPORTED_MODULE_2__scrollbarFix_js__["a" /* fixScrollbar */])()
  }

  // sweetalert2/issues/1247
  setTimeout(() => {
    container.scrollTop = 0
  })
}

const addClasses = (container, popup, params) => {
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["a" /* addClass */](container, params.showClass.backdrop)
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["O" /* show */](popup)
  // Animate popup right after showing it
  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["a" /* addClass */](popup, params.showClass.popup)

  __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["a" /* addClass */]([document.documentElement, document.body], __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */].shown)
  if (params.heightAuto && params.backdrop && !params.toast) {
    __WEBPACK_IMPORTED_MODULE_0__dom_index_js__["a" /* addClass */]([document.documentElement, document.body], __WEBPACK_IMPORTED_MODULE_1__classes_js__["b" /* swalClasses */]['height-auto'])
  }
}


/***/ }),
/* 68 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_dom_inputUtils_js__ = __webpack_require__(19);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_dom_getters_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__staticMethods_showLoading_js__ = __webpack_require__(9);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__utils_DismissReason_js__ = __webpack_require__(6);






const handleConfirmButtonClick = (instance, innerParams) => {
  instance.disableButtons()
  if (innerParams.input) {
    handleConfirmWithInput(instance, innerParams)
  } else {
    confirm(instance, innerParams, true)
  }
}
/* harmony export (immutable) */ __webpack_exports__["b"] = handleConfirmButtonClick;


const handleCancelButtonClick = (instance, dismissWith) => {
  instance.disableButtons()
  dismissWith(__WEBPACK_IMPORTED_MODULE_4__utils_DismissReason_js__["a" /* DismissReason */].cancel)
}
/* harmony export (immutable) */ __webpack_exports__["a"] = handleCancelButtonClick;


const handleConfirmWithInput = (instance, innerParams) => {
  const inputValue = Object(__WEBPACK_IMPORTED_MODULE_1__utils_dom_inputUtils_js__["a" /* getInputValue */])(instance, innerParams)

  if (innerParams.inputValidator) {
    instance.disableInput()
    const validationPromise = Promise.resolve().then(() => innerParams.inputValidator(inputValue, innerParams.validationMessage))
    validationPromise.then(
      (validationMessage) => {
        instance.enableButtons()
        instance.enableInput()
        if (validationMessage) {
          instance.showValidationMessage(validationMessage)
        } else {
          confirm(instance, innerParams, inputValue)
        }
      }
    )
  } else if (!instance.getInput().checkValidity()) {
    instance.enableButtons()
    instance.showValidationMessage(innerParams.validationMessage)
  } else {
    confirm(instance, innerParams, inputValue)
  }
}

const succeedWith = (instance, value) => {
  instance.closePopup({ value })
}

const confirm = (instance, innerParams, value) => {
  if (innerParams.showLoaderOnConfirm) {
    Object(__WEBPACK_IMPORTED_MODULE_3__staticMethods_showLoading_js__["b" /* showLoading */])() // TODO: make showLoading an *instance* method
  }

  if (innerParams.preConfirm) {
    instance.resetValidationMessage()
    const preConfirmPromise = Promise.resolve().then(() => innerParams.preConfirm(value, innerParams.validationMessage))
    preConfirmPromise.then(
      (preConfirmValue) => {
        if (Object(__WEBPACK_IMPORTED_MODULE_0__utils_dom_domUtils_js__["m" /* isVisible */])(Object(__WEBPACK_IMPORTED_MODULE_2__utils_dom_getters_js__["s" /* getValidationMessage */])()) || preConfirmValue === false) {
          instance.hideLoading()
        } else {
          succeedWith(instance, typeof (preConfirmValue) === 'undefined' ? value : preConfirmValue)
        }
      }
    )
  } else {
    succeedWith(instance, value)
  }
}


/***/ }),
/* 69 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utils_utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__staticMethods_dom_js__ = __webpack_require__(10);





const addKeydownHandler = (instance, globalState, innerParams, dismissWith) => {
  if (globalState.keydownTarget && globalState.keydownHandlerAdded) {
    globalState.keydownTarget.removeEventListener('keydown', globalState.keydownHandler, { capture: globalState.keydownListenerCapture })
    globalState.keydownHandlerAdded = false
  }

  if (!innerParams.toast) {
    globalState.keydownHandler = (e) => keydownHandler(instance, e, innerParams, dismissWith)
    globalState.keydownTarget = innerParams.keydownListenerCapture ? window : __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w" /* getPopup */]()
    globalState.keydownListenerCapture = innerParams.keydownListenerCapture
    globalState.keydownTarget.addEventListener('keydown', globalState.keydownHandler, { capture: globalState.keydownListenerCapture })
    globalState.keydownHandlerAdded = true
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = addKeydownHandler;


// Focus handling
const setFocus = (innerParams, index, increment) => {
  const focusableElements = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["o" /* getFocusableElements */]()
  // search for visible elements and select the next possible match
  for (let i = 0; i < focusableElements.length; i++) {
    index = index + increment

    // rollover to first item
    if (index === focusableElements.length) {
      index = 0

      // go to last item
    } else if (index === -1) {
      index = focusableElements.length - 1
    }

    return focusableElements[index].focus()
  }
  // no visible focusable elements, focus the popup
  __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["w" /* getPopup */]().focus()
}
/* harmony export (immutable) */ __webpack_exports__["b"] = setFocus;


const arrowKeys = [
  'ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown',
  'Left', 'Right', 'Up', 'Down' // IE11
]

const escKeys = [
  'Escape',
  'Esc' // IE11
]

const keydownHandler = (instance, e, innerParams, dismissWith) => {
  if (innerParams.stopKeydownPropagation) {
    e.stopPropagation()
  }

  // ENTER
  if (e.key === 'Enter') {
    handleEnter(instance, e, innerParams)

  // TAB
  } else if (e.key === 'Tab') {
    handleTab(e, innerParams)

  // ARROWS - switch focus between buttons
  } else if (arrowKeys.includes(e.key)) {
    handleArrows()

  // ESC
  } else if (escKeys.includes(e.key)) {
    handleEsc(e, innerParams, dismissWith)
  }
}

const handleEnter = (instance, e, innerParams) => {
  // #720 #721
  if (e.isComposing) {
    return
  }

  if (e.target && instance.getInput() && e.target.outerHTML === instance.getInput().outerHTML) {
    if (['textarea', 'file'].includes(innerParams.input)) {
      return // do not submit
    }

    Object(__WEBPACK_IMPORTED_MODULE_3__staticMethods_dom_js__["b" /* clickConfirm */])()
    e.preventDefault()
  }
}

const handleTab = (e, innerParams) => {
  const targetElement = e.target

  const focusableElements = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["o" /* getFocusableElements */]()
  let btnIndex = -1
  for (let i = 0; i < focusableElements.length; i++) {
    if (targetElement === focusableElements[i]) {
      btnIndex = i
      break
    }
  }

  if (!e.shiftKey) {
    // Cycle to the next button
    setFocus(innerParams, btnIndex, 1)
  } else {
    // Cycle to the prev button
    setFocus(innerParams, btnIndex, -1)
  }
  e.stopPropagation()
  e.preventDefault()
}

const handleArrows = () => {
  const confirmButton = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["l" /* getConfirmButton */]()
  const cancelButton = __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["i" /* getCancelButton */]()
  // focus Cancel button if Confirm button is currently focused
  if (document.activeElement === confirmButton && __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["J" /* isVisible */](cancelButton)) {
    cancelButton.focus()
    // and vice versa
  } else if (document.activeElement === cancelButton && __WEBPACK_IMPORTED_MODULE_0__utils_dom_index_js__["J" /* isVisible */](confirmButton)) {
    confirmButton.focus()
  }
}

const handleEsc = (e, innerParams, dismissWith) => {
  if (Object(__WEBPACK_IMPORTED_MODULE_2__utils_utils_js__["a" /* callIfFunction */])(innerParams.allowEscapeKey)) {
    e.preventDefault()
    dismissWith(__WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__["a" /* DismissReason */].esc)
  }
}


/***/ }),
/* 70 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__utils_utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__ = __webpack_require__(6);



const handlePopupClick = (domCache, innerParams, dismissWith) => {
  if (innerParams.toast) {
    handleToastClick(domCache, innerParams, dismissWith)
  } else {
    // Ignore click events that had mousedown on the popup but mouseup on the container
    // This can happen when the user drags a slider
    handleModalMousedown(domCache)

    // Ignore click events that had mousedown on the container but mouseup on the popup
    handleContainerMousedown(domCache)

    handleModalClick(domCache, innerParams, dismissWith)
  }
}
/* harmony export (immutable) */ __webpack_exports__["a"] = handlePopupClick;


const handleToastClick = (domCache, innerParams, dismissWith) => {
  // Closing toast by internal click
  domCache.popup.onclick = () => {
    if (
      innerParams.showConfirmButton ||
      innerParams.showCancelButton ||
      innerParams.showCloseButton ||
      innerParams.input
    ) {
      return
    }
    dismissWith(__WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__["a" /* DismissReason */].close)
  }
}

let ignoreOutsideClick = false

const handleModalMousedown = (domCache) => {
  domCache.popup.onmousedown = () => {
    domCache.container.onmouseup = function (e) {
      domCache.container.onmouseup = undefined
      // We only check if the mouseup target is the container because usually it doesn't
      // have any other direct children aside of the popup
      if (e.target === domCache.container) {
        ignoreOutsideClick = true
      }
    }
  }
}

const handleContainerMousedown = (domCache) => {
  domCache.container.onmousedown = () => {
    domCache.popup.onmouseup = function (e) {
      domCache.popup.onmouseup = undefined
      // We also need to check if the mouseup target is a child of the popup
      if (e.target === domCache.popup || domCache.popup.contains(e.target)) {
        ignoreOutsideClick = true
      }
    }
  }
}

const handleModalClick = (domCache, innerParams, dismissWith) => {
  domCache.container.onclick = (e) => {
    if (ignoreOutsideClick) {
      ignoreOutsideClick = false
      return
    }
    if (e.target === domCache.container && Object(__WEBPACK_IMPORTED_MODULE_0__utils_utils_js__["a" /* callIfFunction */])(innerParams.allowOutsideClick)) {
      dismissWith(__WEBPACK_IMPORTED_MODULE_1__utils_DismissReason_js__["a" /* DismissReason */].backdrop)
    }
  }
}


/***/ }),
/* 71 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = update;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__src_utils_dom_index_js__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__src_utils_utils_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__sweetalert2_js__ = __webpack_require__(7);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__privateProps_js__ = __webpack_require__(3);





/**
 * Updates popup parameters.
 */
function update (params) {
  const popup = __WEBPACK_IMPORTED_MODULE_0__src_utils_dom_index_js__["w" /* getPopup */]()
  const innerParams = __WEBPACK_IMPORTED_MODULE_3__privateProps_js__["a" /* default */].innerParams.get(this)

  if (!popup || __WEBPACK_IMPORTED_MODULE_0__src_utils_dom_index_js__["B" /* hasClass */](popup, innerParams.hideClass.popup)) {
    return Object(__WEBPACK_IMPORTED_MODULE_1__src_utils_utils_js__["h" /* warn */])(`You're trying to update the closed or closing popup, that won't work. Use the update() method in preConfirm parameter or show a new popup.`)
  }

  const validUpdatableParams = {}

  // assign valid params from `params` to `defaults`
  Object.keys(params).forEach(param => {
    if (__WEBPACK_IMPORTED_MODULE_2__sweetalert2_js__["default"].isUpdatableParameter(param)) {
      validUpdatableParams[param] = params[param]
    } else {
      Object(__WEBPACK_IMPORTED_MODULE_1__src_utils_utils_js__["h" /* warn */])(`Invalid parameter to update: "${param}". Updatable params are listed here: https://github.com/sweetalert2/sweetalert2/blob/master/src/utils/params.js`)
    }
  })

  const updatedParams = Object.assign({}, innerParams, validUpdatableParams)

  __WEBPACK_IMPORTED_MODULE_0__src_utils_dom_index_js__["N" /* render */](this, updatedParams)

  __WEBPACK_IMPORTED_MODULE_3__privateProps_js__["a" /* default */].innerParams.set(this, updatedParams)
  Object.defineProperties(this, {
    params: {
      value: Object.assign({}, this.params, params),
      writable: false,
      enumerable: true
    }
  })
}


/***/ })
/******/ ]);