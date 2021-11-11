/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/common.js":
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
/***/ (() => {

$(function () {
  $(document).ready(function () {
    // hide preloader start
    setTimeout(function () {
      $('.preloader').fadeOut();
    }, 500); // hide preloader end
    // notification start

    $('.notification').each(function () {
      var icon = $(this).find('.notification__icon');
      var dropdown = $(this).find('.notification__list');
      icon.click(function (e) {
        e.stopPropagation();

        if (dropdown.hasClass("active") == 1) {
          dropdown.removeClass("active").slideUp();
        } else {
          dropdown.addClass("active").slideDown();
        }

        $('.user-menu').removeClass("active").slideUp();
      });
    }); // notification end
    // user menu hide show start

    $(".user").each(function () {
      var avatar = $(this).find('.user__avatar');
      var dropdown = $(this).find('.user-menu');
      avatar.click(function (e) {
        e.stopPropagation();

        if (dropdown.hasClass("active") == 1) {
          dropdown.removeClass("active").slideUp();
        } else {
          dropdown.addClass("active").slideDown();
        }

        $('.notification__list').removeClass("active").slideUp();
      });
    }); // user menu hide show end
    // hide elements on document click start
    // $(document).click(function() {
    // 	$('.notification__list').removeClass("active").slideUp();
    // 	$('.user-menu').removeClass("active").slideUp();
    // });
    // hide elements on document click end
    // popup init start

    $('.popup-link').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    }); // popup init end
    // open close sidebar start

    $('.btn-menu').click(function () {
      $('.sidebar').toggleClass("open");
      $('.header').toggleClass('move-right');
    });
    $('.sidebar__close-btn').click(function () {
      $('.sidebar').removeClass('open');
    }); // open close sidebar end
    // transactions show hide details start

    $('.transaction').each(function () {
      var thisElement = $(this);
      var header = $(this).find('.transaction__header');
      var hideBlock = $(this).find('.transaction__body');
      header.click(function () {
        if (thisElement.hasClass('open')) {
          thisElement.removeClass('open');
          hideBlock.slideUp();
        } else {
          $('.transaction').removeClass('open');
          $('.transaction__body').slideUp();
          thisElement.addClass('open');
          hideBlock.slideDown();
        }
      });
    }); // transactions show hide details end
    // calendar start

    $('.datepicker-here').data({
      inline: false
    });
    $('.datepicker-here.inline-datepicker').data({
      inline: true
    });
    $('.form-control').datepicker({
      language: "ru",
      todayHighlight: true,
      format: "dd/mm"
    }); // calendar start
    // tooltip start

    $('.tooltip').each(function () {
      var thisElement = $(this);
      var text = $(this).children('.tooltip__text');
      thisElement.hover(function (e) {
        e.stopPropagation();
        $(this).addClass("active");
        text.stop().fadeIn();
      }, function () {
        $(this).removeClass("active");
        text.stop().fadeOut();
      });
    }); // tooptip end
    // line chart start

    var ctx = $("#line-chart");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "2015",
          data: [10, 8, 6, 5, 12, 8, 16, 17, 6, 7, 6, 10],
          lineTension: 0,
          borderColor: '#557ef8',
          backgroundColor: 'rgba(85, 126, 248, 0.5)',
          pointBorderColor: '#e0e0e0',
          pointBackgroundColor: '#fff'
        }]
      },
      options: {
        legend: {
          display: false
        }
      }
    }); // line chart end
    // settings tabs start

    $('.settings__tabs-item').click(function () {
      var tabID = $(this).attr('data-tab');
      $(this).addClass('active').siblings().removeClass('active');
      $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
    }); // settings tabs end
    // custom select start

    $('select').customSelect(); // custom select end
    // support tabs start

    $('.support__tabs-item').click(function () {
      var tabID = $(this).attr('data-tab');
      $(this).addClass('active').siblings().removeClass('active');
      $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
    }); // support tabs end
    // accordion start

    $('.accordion__item').each(function () {
      var title = $(this).find('.accordion__title');
      var body = $(this).find('.accordion__body');
      title.click(function () {
        if ($(this).hasClass('open')) {
          $('.accordion__title').removeClass('open');
          body.slideUp();
        } else {
          $('.accordion__title').removeClass('open');
          $(this).addClass('open');
          $('.accordion__body').slideUp();
          body.slideDown();
        }
      });
    }); // accordion end
    // edit btn start

    $('.save-payment__item').each(function () {
      var ItemBtn = $(this).find('.edit');
      var ItemBody = $(this).find('.save-payment__body');
      ItemBtn.click(function () {
        if ($(this).hasClass('open')) {
          ItemBody.slideUp();
          $(this).removeClass('open').html('Edit');
        } else {
          $(this).addClass('open').html('Close');
          ItemBody.slideDown();
        }
      });
    }); // edit btn end
  });
});

/***/ }),

/***/ "./resources/css/main.min.css":
/*!************************************!*\
  !*** ./resources/css/main.min.css ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/style.css":
/*!*********************************!*\
  !*** ./resources/css/style.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/common": 0,
/******/ 			"css/style": 0,
/******/ 			"css/main.min": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style","css/main.min"], () => (__webpack_require__("./resources/js/common.js")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/main.min"], () => (__webpack_require__("./resources/css/main.min.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style","css/main.min"], () => (__webpack_require__("./resources/css/style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;