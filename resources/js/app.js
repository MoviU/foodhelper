require('./bootstrap');
require('/slick/slick.min.js');

$('.photo-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  adaptiveHeight: true
});
