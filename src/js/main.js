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
  const menu = document.querySelector(".top__list"),
    submenu = document.querySelector(".bottom__list"),
    menuItem = document.querySelectorAll(".top__item"),
    hamburger = document.querySelector(".hamburger");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger_active");
    menu.classList.toggle("top__list_active");
    submenu.classList.toggle("bottom__list_active");
  });

  menuItem.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("top__list_active");
      submenu.classList.toggle("bottom__list_active");
    });
  });
});
