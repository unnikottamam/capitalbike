$(document).ready(function () {
  $(".header__menutoggle").on("click", function (e) {
    e.preventDefault();
    $(".header, body, .header__menutoggle").toggleClass("menuactive");
  });
  $(".scroll-down").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top
      },
      500
    );
  });

  $(".eventsec__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    swipe: false
  });
});
