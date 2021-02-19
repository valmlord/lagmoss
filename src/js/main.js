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
