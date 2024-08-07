/* Main Menu */
$(document).ready(function () {
  const header = document.querySelector(".header");
  const menuBtn = document.querySelectorAll(".menu-trigger");
  //const mainMenu = document.querySelector(".header__wrap");
  const subMenu = document.querySelectorAll(".navigation__item");
  const dropDown = document.getElementsByClassName(".navigation__item span");

  /* Burger Menu Button*/

  menuBtn.forEach((input) => {
    input.addEventListener("click", () => {
      console.log("menu");
      jQuery(".menubtn").toggleClass("open");
      jQuery(".header__wrap").toggleClass("open");

      //toggleMenu();
      jQuery("body").toggleClass("hide-overflow");
    });
  });
});
/* jQuery(document).ready(function () {
  jQuery(".menu-trigger").click(function (e) {
    jQuery(".menubtn").toggleClass("open");
    toggleMenu();
    jQuery("body").toggleClass("hide-overflow");

    e.preventDefault();
  });
}); */

jQuery(document).on("click", ".navigation__item span", function (e) {
  e.preventDefault();
  let current = jQuery(this);
  if (current.parent().hasClass("active")) {
    current.parent().removeClass("active");
    jQuery(".navigation__item").removeClass("active");
  } else {
    jQuery(".navigation__item").removeClass("active");
    current.parent().removeClass("active");
    current.parent().toggleClass("active");
  }
});

/*  */

/* Search Bar */

const searchBtn = document.querySelectorAll(".search__trigger");
const submitBtn = document.querySelector(".submit__button");
searchBtn.forEach((input) => {
  input.addEventListener("click", function () {
    header.classList.add("searchactive");
  });
});

$(document).ready(function () {
  $(".searchbox").click(function () {
    $(".submit__button").addClass("subitbtn");
    $("input").addClass("searchinput");
  });
});

$(document).on("focusout", ".searchbox input", function () {
  if ($(this).val() == "") {
    $("input").removeClass("searchinput");
    $(".submit__button").removeClass("subitbtn");
  }
});

/* Functions */

/* Main Menu Ends */
$(document).ready(function () {
  $(".herobanner__list").on("init", function (e, slick) {
    var $firstAnimatingElements = $(
      ".herobanner__list li.slick-current.slick-active"
    ).find("[data-animation]");
    doAnimations($firstAnimatingElements);
  });
  $(".herobanner__list").on(
    "beforeChange",
    function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $(
        '.herobanner__list li[data-slick-index="' + nextSlide + '"]'
      ).find("[data-animation]");
      doAnimations($animatingElements);
    }
  );
  $(".herobanner__list").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    appendDots: $(".slide-m-dots"),
    prevArrow: $(".slide-m-prev"),
    nextArrow: $(".slide-m-next"),
  });
  function doAnimations(elements) {
    var animationEndEvents =
      "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
    elements.each(function () {
      var $this = $(this);
      var $animationDelay = $this.data("delay");
      var $animationType = "animated " + $this.data("animation");
      $this.css({
        "animation-delay": $animationDelay,
        "-webkit-animation-delay": $animationDelay,
      });
      $this.addClass($animationType).one(animationEndEvents, function () {
        $this.removeClass($animationType);
      });
    });
  }
});

//innerBanner

$(document).ready(function () {
  var $carouselFor = jQuery(".innerbanner ul");

  $carouselFor.slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    appendDots: $(".slide-dots"),
    prevArrow: $(".slide-prev"),
    nextArrow: $(".slide-next"),
  });
  var countl = $carouselFor.slick("getSlick").slideCount;
  if (countl == 1) {
    $(".innerbanner .slick-dots").hide();
  } else {
    $(".innerbanner .slick-dots").show();
  }
});

$(document).ready(function () {
  $(".featureopp__carousal").slick({
    slidesToShow: 4,
    dots: true,
    slidesToScroll: 4,
    arrows: true,
    infinite: false,
    appendDots: $(".slide--dots"),
    prevArrow: $(".slide--prev"),
    nextArrow: $(".slide--next"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: false,
          dots: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: false,
        },
      },
    ],
  });
});
$(document).ready(function () {
  var $compus = $(".campus__carousal");
  $compus.slick({
    slidesToShow: 3,
    dots: true,
    slidesToScroll: 3,
    arrows: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: false,
          infinite: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: false,
        },
      },
    ],
  });
  var campuscount = $compus.slick("getSlick").slideCount;
  if (campuscount == 3) {
    $(".campus .slick-dots").hide();
  } else {
    $(".campus .slick-dots").show();
  }
});
$(document).ready(function () {
  $(".linkedin__carousal").slick({
    slidesToShow: 4,
    dots: false,
    slidesToScroll: 4,
    arrows: false,
    infinite: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: false,
          arrows: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          arrows: true,
          dots: false,
        },
      },
    ],
  });
});

$(".counting").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-count");

  $({ countNum: $this.text() }).animate(
    {
      countNum: countTo,
    },

    {
      delay: 10,
      duration: 3000,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
        //alert('finished');
      },
    }
  );
});

/* Accordion */
const accordBtn = document.querySelectorAll(".filterbox__item--haschild");

$(document).ready(function () {
  $(".filterbox__item--haschild").on("click", function () {
    $(this).toggleClass("acc-active");
    $(this.querySelector("ul")).slideToggle(200);
    if ($(this).hasClass("acc-active")) {
      ".filterbox__submenu ul li".addClass("acc-active");
    }
  });
});

$(document).ready(function () {
  $(window).on("load", function () {
    if ($(window).width() < 991) {
      $(".filterbox h4").on("click", function () {
        $(".filterbox__list").toggleClass("accord-active");

        if ($(".filterbox__list").hasClass("accord-active")) {
          $(".filterbox").addClass("filterclosed");
        } else {
          $(".filterbox").removeClass("filterclosed");
        }
        /*  $(this.querySelector("ul")).slideToggle(200);
         */
      });
    }
  });
});

$(document).ready(function () {
  let oldValue = 0;
  let newValue = 0;
  var windowsize = $(window).width() < 960;

  window.addEventListener("scroll", (e) => {
    if (scrollY >= "30") {
      jQuery(".header").addClass("header--active");
      jQuery(".scrolltop").show();
    } else {
      jQuery(".header").removeClass("header--active");
      jQuery(".scrolltop").hide();
    }

    /*Hanging menu*/

    newValue = window.pageYOffset;
    if (oldValue < newValue && scrollY >= "40") {
      jQuery(".header").addClass("header--hide");
    } else if (oldValue > newValue) {
      jQuery(".header").removeClass("header--hide");
    }
    oldValue = newValue;

    if (windowsize) {
      jQuery(".header").removeClass("header--hide");
    }
  });
});

/* Projectgallery popup */

jQuery(function ($) {
  // ALL SLIDER CALL
  sliderCall.photoGallery();
  // Lightbox Triggers
  lightboxTrigger();
  // donation popup trigger
  donationPopupTrigger();
  jQuery(document).ajaxComplete(function () {
    donationPopupTrigger();
  });
});

var sliderCall = {
  photoGallery: function () {
    var slider = $(".projectgallery__listing");
    slider.slick({
      dots: false,
      arrows: true,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: "15px",
          },
        },
      ],
    });
  },
};

function lightboxTrigger() {
  $(".projectgallery__popup").magnificPopup({
    delegate: "a.image-popup-vertical-fit",
    type: "image",
    fixedContentPos: true,
    closeOnBgClick: true,
    alignTop: false,
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 2], // Will preload 0 - before current, and 1 after the current image
    },
  });
}

function donationPopupTrigger() {
  $(".popup__donation").magnificPopup({
    type: "inline",
    midClick: true,
    mainClass: "mfp-fade",
    fixedContentPos: true, // Custom settings, never mind
    fixedBgPos: false,
  });
}

/* Waystogive tabs*/

$(document).ready(function () {
  // tabbed content

  $(".tab_content").hide();
  $(".tab_content:first").show();

  /* if in tab mode */
  $("ul.tabs li").click(function () {
    $(".tab_content").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");

    $(".tab_drawer_heading").removeClass("d_active");
    $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");
  });
  /* if in drawer mode */
  $(".tab_drawer_heading").click(function () {
    $(".tab_content").hide();
    var d_activeTab = $(this).attr("rel");
    $("#" + d_activeTab).fadeIn();

    $(".tab_drawer_heading").removeClass("d_active");
    $(this).addClass("d_active");

    $("ul.tabs li").removeClass("active");
    $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
  });

  /* Extra class "tab_last"
 to add border to right side
 of last tab */
  $("ul.tabs li").last().addClass("tab_last");
});
/* $(window).on("load", function () {
  // Lenis smooth scrolling
  let lenis;

  // Initialize Lenis smooth scrolling
  const initSmoothScrolling = () => {
    lenis = new Lenis({
      smooth: true,
      duration: 1,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
      direction: "vertical", // vertical, horizontal
      gestureDirection: "vertical", // vertical, horizontal, both
      mouseMultiplier: 1,
      smoothTouch: false,
      touchMultiplier: 2,
      infinite: false,
    });

    const scrollFn = (time) => {
      lenis.raf(time);
      requestAnimationFrame(scrollFn);
    };

    requestAnimationFrame(scrollFn);
  };
  $(function () {
    initSmoothScrolling();
  });
}); */
/* $(document).ready(function () {
  initSmoothScrolling();
}); */

/* Scrolltotop */

/* Select OnChange color */

$(document).ready(function () {
  $("select").css("backgroundColor", "white");
  $("select").change(function () {
    var current = $("select").val();
    if (current != "null") {
      $("select").css("color", "black");
      $("select").css("backgroundColor", "white");
    } else {
      $("select").css("color", "gray");
    }
  });

  $("select").each(function () {
    /*  if ($(this).is("option:selected") == num) {
      //$("select").css("color", "yellow");
      console.log("Selected");
    } else {
      //$("select").css("color", "black");
      console.log("NotSelected");
    } */
    var conceptName = $("select").find(":selected").text();
    console.log("conceptName:", conceptName);

    if (conceptName == "Select") {
      $("select").css("color", "gray");
    } else {
      // do something else
      $("select").css("color", "black");
    }
  });
});

$(document).ready(function () {
  $(".scrolltop").on("click", function () {
    window.scroll({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
  });
});

$(document).ready(function () {
  $(".popup-with-move-anim").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });
});

$(document).ready(function () {
  $(".msg__fromceo").magnificPopup({
    type: "inline",
    midClick: true,
    mainClass: "mfp-fade",
    fixedContentPos: true, // Custom settings, never mind
    fixedBgPos: false,
  });
});

// Change Order Project Details

function check() {
  if ($(window).width() < 767) {
    $(".donationblock").remove().insertAfter($(".innerbanner"));
    donationPopupTrigger();
  }
}
//check();

$(window).on("load", function () {
  check();
});
$(window).resize(function () {
  check();
});

// Blog Cat filter

$(document).ready(function () {
  /*   $(".blog__catfilter").on("click", ".init", function () {
    $(this).closest(".blog__catfilter").children("li:not(.init)").toggle();
  });

  var allOptions = $(".blog__catfilter").children("li:not(.init)");
  $(".blog__catfilter").on("click", "li:not(.init)", function () {
    allOptions.removeClass("selected");
    $(this).addClass("selected");
    $(".blog__catfilter").children(".init").html($(this).html());
    allOptions.toggle();
  }); */

  // onClick new options list of new select
  $(".cat-select-content").text($(".cat-dropdown-list > li.selected").text());
  var newOptions = $(".cat-dropdown-list > li");
  newOptions.click(function () {
    $(".cat-select-content").text($(this).text());
    $(".cat-dropdown-list > li").removeClass("selected");
    $(this).addClass("selected");
  });

  var aeDropdown = $(".cat-dropdown");
  aeDropdown.click(function () {
    $(".cat-dropdown-list").toggleClass("cat-select-hide");
  });
});

// Animation for Titles

$(document).ready(function () {
  AOS.init({
    offset: 25,
    delay: 0,
    duration: 100,
    easing: "linear",
    once: true,
    mirror: true,
  });
});

// Animation for Stats

$(document).ready(function () {
  var counted = 0;
  $(window).scroll(function () {
    var oTop = $("#counter-stats");
    if (oTop.length > 0) {
      var Topnav = oTop.offset().top - window.innerHeight;
      if (counted == 0 && $(window).scrollTop() > Topnav) {
        $(".counter").each(function () {
          var $this = $(this),
            countTo = parseInt($this.attr("data-count"));
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
                //alert('finished');
              },
            }
          );
        });
        counted = 1;
      }
    }
  });
});

$(document).ready(function () {
  $(".youngFaculty__forSlide").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".youngFaculty__navSlide",
    accessibility: false,
    swipe: false,
  });
  $(".youngFaculty__navSlide").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".youngFaculty__forSlide",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".open-popup-link").on("click", function () {
    var target = $(this).data("target");
    $.magnificPopup.open({
      items: {
        src: target,
      },
      type: "inline",
      midClick: true,
      fixedBgPos: true,
      fixedContentPos: true,
      mainClass: "mfp-fade",
      callbacks: {
        open: function () {
          $(".mfp-wrap").addClass("bgoverlay");
        },
        close: function () {
          $(".mfp-wrap").removeClass("bgoverlay");
        },
      },
    });
  });
});
