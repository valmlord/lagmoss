$(".main-slider").slick({
  autoplay: true,
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  adaptiveHeight: true,
  arrow: false,
  fade: true,
});
$(".main-slider .slick-arrow").remove();

window.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector(".mobile"),
    mobileMenuItem = document.querySelectorAll(".mobile__link"),
    socialIcon = document.querySelectorAll(".social__icon"),
    hamburger = document.querySelector(".hamburger");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger_active");
    menu.classList.toggle("mobile_active");
  });

  mobileMenuItem.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("mobile_active");
    });
  });

  socialIcon.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("mobile_active");
    });
  });
});

$(".product-card__slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: false,
  asNavFor: ".slider-nav-thumbnails",
});

$(".product-card__nav-thumbnails").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: ".product-card__slider",
  dots: false,
  focusOnSelect: true,
});

// Remove active class from all thumbnail slides
$(".product-card__nav-thumbnails .slick-slide").removeClass("slick-active");

// Set active class to first thumbnail slides
$(".product-card__nav-thumbnails .slick-slide").eq(0).addClass("slick-active");

// On before slide change match active thumbnail to current slide
$(".product-card__slider").on(
  "beforeChange",
  function (event, slick, currentSlide, nextSlide) {
    var mySlideNumber = nextSlide;
    $(".product-card__nav-thumbnails .slick-slide").removeClass("slick-active");
    $(".product-card__nav-thumbnails .slick-slide")
      .eq(mySlideNumber)
      .addClass("slick-active");
  }
);
