$(document).ready(function () {
  $(".header__toggle").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .mainmenu, .header__toggle").toggleClass("menuactive");
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

  $(".brands__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });

  $(".instasec__slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
});
