$(".top-slider").slick({
  autoplay: true,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  arrow: false,
});
$(".top-slider .slick-arrow").remove();

window.addEventListener("DOMContentLoaded", () => {
  const subMenu = document.querySelector(".bottom__list"),
    subMenuItem = document.querySelectorAll(".bottom__link"),
    topMenu = document.querySelector(".header__top"),
    topMenuItem = document.querySelectorAll(".top__link"),
    socialIcon = document.querySelectorAll(".social__icon"),
    hamburger = document.querySelector(".hamburger");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger_active");
    subMenu.classList.toggle("bottom__list_active");
    topMenu.classList.toggle("header__top_active");
  });

  topMenuItem.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      subMenu.classList.toggle("bottom__list_active");
      topMenu.classList.toggle("header__top_active");
    });
  });

  subMenuItem.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      subMenu.classList.toggle("bottom__list_active");
      topMenu.classList.toggle("header__top_active");
    });
  });

  socialIcon.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      subMenu.classList.toggle("bottom__list_active");
      topMenu.classList.toggle("header__top_active");
    });
  });
});
