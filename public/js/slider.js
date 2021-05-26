/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(document).ready(function () {
  var _$$owlCarousel;

  $("#owl-demo").owlCarousel({
    autoPlay: 3000,
    stopOnHover: true,
    navigation: true,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    loop: true,
    autoplay: true,
    autoplayTimeout: 10000,
    smartSpeed: 1000,
    singleItem: true,
    items: 1,
    autoHeight: true,
    transitionStyle: "fade"
  });
  $("#categories").owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  });
  $("#categories1").owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  });
  $("#categories_news").owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 20,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      768: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: false,
        loop: false
      }
    }
  });
  $("#more_products").owlCarousel({
    stagePadding: 10,
    margin: 10,
    navigation: true,
    loop: true,
    items: 3,
    autoHeight: true,
    responsiveClass: true,
    responsive: {
      0: {
        loop: true,
        items: 2,
        nav: false
      },
      540: {
        items: 3,
        nav: false,
        loop: true
      },
      1000: {
        items: 3,
        nav: false,
        loop: false
      }
    }
  });
  $("#smaller_carousel").owlCarousel((_$$owlCarousel = {
    stagePadding: 50,
    margin: 10,
    autoPlay: 3000,
    stopOnHover: true,
    navigation: true,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    loop: true,
    autoplay: true,
    autoplayTimeout: 10000,
    smartSpeed: 1000,
    items: 3,
    autoHeight: true,
    transitionStyle: "fade",
    responsiveClass: true
  }, _defineProperty(_$$owlCarousel, "loop", true), _defineProperty(_$$owlCarousel, "responsive", {
    0: {
      loop: true,
      items: 1,
      nav: false
    },
    540: {
      items: 2,
      nav: false
    },
    1000: {
      items: 3,
      nav: false,
      loop: false
    }
  }), _$$owlCarousel));
});
$(document).ready(function () {
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 3; //globaly define number of elements per page

  var syncedSecondary = true;
  sync1.owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: false,
    dots: false,
    loop: true,
    autoHeight: true,
    responsiveRefreshRate: 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>']
  }).on('changed.owl.carousel', syncPosition);
  sync2.on('initialized.owl.carousel', function () {
    sync2.find(".owl-item").eq(0).addClass("current");
  }).owlCarousel({
    items: slidesPerPage,
    dots: false,
    nav: true,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: slidesPerPage,
    //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate: 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - .5);

    if (current < 0) {
      current = count;
    }

    if (current > count) {
      current = 0;
    } //end block


    sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }

    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});
/******/ })()
;