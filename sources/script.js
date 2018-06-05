const $ = require('jquery');
require('slick-carousel');

$(function() {
  $('.slick-box').slick({
    infinite: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});
