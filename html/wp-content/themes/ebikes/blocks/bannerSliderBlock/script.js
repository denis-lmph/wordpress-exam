(function ($) {
    $(document).ready(function () {
      jQuery(document).ready(function($) {

        $('.banner-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1 ,
          draggable: true,
          autoplay: true,
          speed: 800,
          infinite: true,
          dots: false,
          arrows: false,  
          prevArrow: false,
          nextArrow: false,
          responsive: [          
            {
              breakpoint: 992,
              settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              }
            }
          ]
        });

      });
    });
  
  })(jQuery);