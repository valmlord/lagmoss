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
  const menu = document.querySelector(".mobile"),
    topMenu = document.querySelector(".header__top"),
    socialIcon = document.querySelectorAll(".social__icon"),
    hamburger = document.querySelector(".hamburger");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger_active");
    menu.classList.toggle("mobile_active");
  });

  topMenuItem.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("menu_active");
    });
  });
});
