$(document).ready(function () {
  $(".header__toggle").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .mainmenu, .header__toggle").toggleClass("menuactive");
  });
  $(".mainmenu__list li a").on("click", function (e) {
    $("body, .header, .mainmenu, .header__toggle").removeClass("menuactive");
  });
  $(".scroll-down, .ctalist .btn[href*='#'], .pagebanner__down").on(
    "click",
    function (e) {
      e.preventDefault();
      $("html, body").animate(
        {
          scrollTop: $($(this).attr("href")).offset().top
        },
        500
      );
    }
  );
  // $(".mainmenu li a[href*='#']").on("click", function (e) {
  //   e.preventDefault();
  //   $link = $(".mainmenu li a[href*='#']").attr("href").split("#").pop();
  //   $("html, body").animate(
  //     {
  //       scrollTop: $(`#${$link}`).offset().top
  //     },
  //     500
  //   );
  // });

  $(".eventsec__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true
  });

  $(".contslider__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true
  });

  $(".brands__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
    autoplay: true,
    autoplaySpeed: 5000,
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

  $(".teamarea__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 8000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 540,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});
