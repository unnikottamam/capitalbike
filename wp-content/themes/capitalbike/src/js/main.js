$(document).ready(function () {
  $(".header__toggle").on("click", function (e) {
    e.preventDefault();
    $("body, .header, .mainmenu, .header__toggle").toggleClass("menuactive");
  });
  $(".mainmenu__list li a").on("click", function (e) {
    $("body, .header, .mainmenu, .header__toggle").removeClass("menuactive");
  });
  $(".faqsec__inn > h3").on("click", function (e) {
    $(".faqsec__inn").removeClass("active");
    $(this).parent().toggleClass("active");
  });
  $(".mainmenu__list>li.menu-item-has-children").append("<span></span>");
  $(".mainmenu__list>li span").on("click", function (e) {
    if ($(this).parent().hasClass("dropactive")) {
      $(".mainmenu__list>li").removeClass("dropactive");
    } else {
      $(".mainmenu__list>li").removeClass("dropactive");
      $(this).parent().addClass("dropactive");
    }
  });
  $(".sponsorgal .gallery a").on("click", function (e) {
    e.preventDefault();
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

  $(".sidecarousel__imgs").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true
  });

  $(".contentslider__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    dots: false
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
