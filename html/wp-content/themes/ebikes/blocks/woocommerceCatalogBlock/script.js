(function ($) {
    $(document).ready(function () {
      jQuery(document).ready(function($) {

        $('#page-product-carousel').slick({
          slidesToShow: 3,
          slidesToScroll: 3 ,
          arrows: false,  
          draggable: true,
          // centerMode: true,
          // variableWidth: true,
          // centerPadding: '400px',
          dots: true,
          autoplay: false,
          speed: 800,
          infinite: false,
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

        $('#recently-viewed-carousel').slick({
          slidesToShow: 3,
          slidesToScroll: 3 ,
          arrows: false,  
          draggable: true,
          dots: false,
          autoplay: false,
          speed: 800,
          infinite: false,
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