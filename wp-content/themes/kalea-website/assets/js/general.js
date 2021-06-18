// JavaScript Document
var $ = jQuery.noConflict();

$(document).ready(function () {
  jQuery("<span class='back-arrow'></span>").insertBefore(".main-menu ul");
  // video popup js
  $(".popup-youtube").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: true,
    fixedContentPos: true,
  });


  jQuery(".main-menu  ul > li > ul >li > ul").each(function () {
 
    if (!$(this).children("li").hasClass("hash-filter")) {
      jQuery(this).prepend(
        "<li class='back-arrow-li'><span class='back-arrow'></span></li>"
      );
    }
      });

  // accordion js
  $("#top-accordian > li > a").click(function (e) {
    e.preventDefault();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else {
      $("#top-accordian > li > a").removeClass("active");
      $(this).addClass("active");
    }
    $(".accordion-content").slideUp();
    $(this).siblings(".accordion-content").stop().slideToggle();
  });

  // Filter left menu js
  $(".content-filter-option > li > a").click(function (e) {
    e.preventDefault();
    //    $(this).parent('li').removeClass("active");
    // if ($(this).parent('li').hasClass("active")) {
    // 	$(this).parent('li').removeClass("active");
    // } else {
    // 	$(this).parent('li').removeClass("active");
    // 	$(this).parent('li').addClass("active");
    // }
    $(".content-filter-option ul").slideUp();
    $(this).siblings(".content-filter-option ul").stop().slideToggle();
  });

  // face slider
  $(".face-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });

  // face slider
  $(".interior-slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  // play youtube or vimeo video on icon click
  $("#play").on("click", function (e) {
    e.preventDefault();

    if ($(this).next().is("iframe")) {
      $("#player")[0].src += "?autoplay=1";
    } else {
      $("#player").trigger("play");
    }
    $("#player").show();
    $("#video-cover").hide();
    $("#play").hide();
  });

  $(".menu-level-2 > li").hover(function () {
    if ($(this).find(".menu-level-3 li").hasClass("hash-filter") != true) {
      $(".menu-level-2 li.hover-active").addClass("active");
    } else {
      $(".menu-level-2 li.hover-active").removeClass("active");
    }
  });

  // menu js
  //mobile menu
  $(".hamburger-box").click(function () {
    $("body").toggleClass("menu-show");
  });

  //$(".main-menu ul li:has(ul)").addClass("has-children");
  $(".main-menu ul li.hash-filter > a").append(
    "<span class='submenuLink'></span>"
  );
  $(".main-menu ul li.hash-filter > a .submenuLink").click(function () {
    $(this).closest("a").next(".submenu").addClass("slide-left");
    jQuery(this).closest("ul").addClass("show-submenu");
    //$(this).parent().find('ul').addClass('show-submenu');
  });

  $(".back").click(function () {
    $(this).closest(".submenu").removeClass("slide-left");
    jQuery(this).closest("ul").removeClass("show-submenu");
  });
  $(".hamburger-box").click(function () {
    //	$('.main-menu').removeClass('show-submenu');
  });

  $(window).bind("resize", function () {
    if ($(this).width() > 768) {
      $("body").removeClass("menu-show");
    }
  });
});
