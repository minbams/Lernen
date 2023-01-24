$('.interactive-menu-button a').click(function () {
  $(this).toggleClass('active');
});

var scroll = new SmoothScroll('a[href*="#"]');

function slickify() {
  $('.blog-slider').slick({
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 991,
        settings: "unslick"
      }
    ]
  });
  $(".slick-next").text("");
  $(".slick-next").addClass("icofont-long-arrow-right");
  $(".slick-prev").text("");
  $(".slick-prev").addClass("icofont-long-arrow-left");
}

slickify();
$(window).resize(function () {
  var $windowWidth = $(window).width();
  if ($windowWidth > 991) {
    slickify();
    $('#blog-btn').addClass('hide-me');
  } else if ($windowWidth < 991) {
    $('#blog-btn').removeClass('hide-me');
  }
});

$('#blog-btn').click(function () {
  $('.hiden-blog').toggleClass('hide-blog');
  $('.hiden-blog').toggleClass('open-blog');
  if ($('.hiden-blog').is(".open-blog")) {
    $("#blog-btn").text("Show Less Stories");
  } else {
    $("#blog-btn").text("Show More Stories");
  }
});

const button = document.querySelector('.btn')
const form = document.querySelector('.form')

button.addEventListener('click', function () {
  form.classList.add('form--no')
});
