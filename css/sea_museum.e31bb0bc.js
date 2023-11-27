var links = document.querySelectorAll(".nav__item");
if (links.length) {
  links.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (link.classList.contains("active")) {
        link.classList.remove("active");
      } else {
        links.forEach(function (link) {
          link.classList.remove("active");
        });
        link.classList.add("active");
      }
    });
  });
}

$(".slider").slick({
  infinite: false,
  dots: true,
  customPaging: function customPaging(slick, index) {
    return (
      "<span>0" +
      (index + 1) +
      '</span><span class="totsl">/0' +
      slick.slideCount +
      "</span>"
    );
  },
});
$(".nav--btn").on("click", function () {
  if ($("header .nav--mobile").is(":visible")) {
    $("header .nav--mobile").slideUp();
    $(this).removeClass("open");
    $("body").css({
      overflow: "visible",
    });
  } else {
    $("header .nav--mobile").slideDown();
    $(this).addClass("open");
    $("body").css({
      overflow: "hidden",
    });
  }
  return false;
});
$(".sliderinit1").slick({
  autoplay: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  gap: "20px",
  infinite: false,
  arrows: true,
  responsive: [
    {
      breakpoint: 835,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".sliderinit2").slick({
  autoplay: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  gap: "20px",
  infinite: false,
  arrows: true,
  responsive: [
    {
      breakpoint: 835,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".cat--unit__for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: ".cat--unit__nav",
});
$(".cat--unit__nav").slick({
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: ".cat--unit__for",
  dots: false,
  arrows: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
      },
    },
  ],
});
