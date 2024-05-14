jQuery(document).ready(function($) {
 // Single Product Images carousel
  var slider = $('#product-image-slider');

  slider.owlCarousel({
      items: 1,
      nav: false,
      dots: true,
      loop: true,
      autoplay: false,
    //   autoplayTimeout: 5000,
    //   autoplayHoverPause: true,
      onInitialized: updateCarouselImage
  });

  $('.variations_form').on('show_variation', updateCarouselImage);

  function updateCarouselImage(event, variation) {
      if (variation && variation.image && variation.image.url) {
          var variationImage = variation.image.url;
          var firstSlide = slider.find('.owl-item').eq(0);
          console.log(variationImage);
          $('.product-main-image').attr('src', variationImage);

          // Go to the first slide.
          slider.trigger('to.owl.carousel', [0, 300, true]);

          // Refresh the carousel to reflect the changes.
          slider.trigger('refresh.owl.carousel');
      }
  }

  /**
    * Initialize Magnific Popup for the product image slider.
    **/
  $('#product-image-slider').magnificPopup({
      delegate: 'a.product-image-link',
      type: 'image',
      gallery: {
          enabled: true
      }
  });

  $('form.cart').on('click', 'button.plus, button.minus', function() {
      // Get current quantity values
      var qty = $(this).closest('form.cart').find('.qty');
      var val = parseFloat(qty.val());
      var max = parseFloat(qty.attr('max'));
      var min = parseFloat(qty.attr('min'));
      var step = parseFloat(qty.attr('step'));

      // Change the value if plus or minus
      if ($(this).is('.plus')) {
          if (max && (max <= val)) {
              qty.val(max);
          } else {
              qty.val(val + step);
          }
      } else {
          if (min && (min >= val)) {
              qty.val(min);
          } else if (val > 1) {
              qty.val(val - step);
          }
      }
  });
  
// for frame size custom functions
// $(document).on('click', '.frame-size-button', function() {
// var selectedSize = $(this).data('size');
// // Remove active class from all buttons
// $('.frame-size-button').removeClass('selected');
// // Add active class to the clicked button
// $(this).addClass('selected');
// $('#frame_size').val(selectedSize);
// $('#frame-size-val').text(' : '+selectedSize);
// // Update the selected size in the variations form
// // $('.single_variation_wrap .woocommerce-variation-selection-needed').find('option[value="' + selectedSize + '"]').prop('selected', true);
// $('.single_variation_wrap').trigger('woocommerce_update_variation_values');
// });

// $(document).on('click', '.single_add_to_cart_button', function(e) {
// var frameSize = $('input[name="frame_size"]').val();
// // alert(frameSize);
// // Perform validation
// if (frameSize === undefined || frameSize.trim() === '') {
//   e.preventDefault();
//   alert('Please select some product options before adding this product to your cart.');
// }
// });

});

