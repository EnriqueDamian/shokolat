(function ($) {
  "use strict"; // Start of use strict



  if ($("#banner").length) {
    $('.your-class').slick({
      dots: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 6000,
    });
  }

  /*======== Brands Slider ========*/

  $('#autoplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 200,
    
  });
  $('#autoplay2').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 200,
    arrows: false,
    
  });

})(jQuery); // End of use strict

$("document").ready(function () {
  $(function () {
    $('#navigation a[href="' + location.pathname.split("/")
    [location.pathname.split("/").length - 1] + '"]').parent().addClass('active');
  });

});

