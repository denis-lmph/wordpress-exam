 jQuery(document).ready(function($) {
    // Catalog ordering 
   $('.woocommerce-ordering select.orderby option[value=""]').prop('disabled', true);
    $('.woocommerce-catalog-carousel select option[value="default"]').prop('disabled', true);

    $('.header-widget__search-icon').click(function(e) {
        e.preventDefault();
        $('#search-modal').modal('show');
    });

    $('.search-modal__btn-close').click(function(e) {
        e.preventDefault();
        $('#search-modal').modal('hide');
        $('#searchform .search-modal__input').val('');
    });


    $('.header-widget__search-icon').click(function(e) {
        e.preventDefault();
        $('#search-modal').modal('show');
    });

    $('.search-modal__btn-close').click(function(e) {
        e.preventDefault();
        $('#search-modal').modal('hide');
        $('#searchform .search-modal__input').val('');
    });


});