<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/ß
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


?>

<?php 
if (is_shop() && is_search()):
    include ebikes_theme_path('/woocommerce/partial/woo_header_search.php');
    include ebikes_theme_path('/woocommerce/partial/page-content-no-filter.php');

elseif (is_tax('pa_brand')):
    include ebikes_theme_path('/woocommerce/partial/woo_header_brand.php');
    include ebikes_theme_path('/woocommerce/partial/page-content-with-filter.php');

    
elseif (!is_shop() && is_tax('product_cat')):

    include ebikes_theme_path('/woocommerce/partial/woo_header_product_cat.php');

    // Get the current category (in this case, "Helmet" category)
    $current_category = get_queried_object();
    $parent_category = '';
    // Check if the current category has a parent
    if ($current_category->parent) {
        // Get the parent category
        $parent_category = get_term($current_category->parent, 'product_cat');

        if ($parent_category && !is_wp_error($parent_category)) {
            // Here, you can use the $parent_category object as needed
           // echo 'Parent Category: ' . $parent_category->name;
           $parent_category  = $parent_category->name;
        }
    }

    if (is_tax('product_cat', 'accessories') || $parent_category == 'Accessories' )  {

        include ebikes_theme_path('/woocommerce/partial/page-content-no-filter.php');

    } else {

        include ebikes_theme_path('/woocommerce/partial/page-content-with-filter.php');
 
    }

elseif (is_shop()):
    include ebikes_theme_path('/woocommerce/partial/woo_header_global.php');
    include ebikes_theme_path('/woocommerce/partial/page-content-with-filter.php');
    
else:
    include ebikes_theme_path('/woocommerce/partial/woo_header_global.php');
    include ebikes_theme_path('/woocommerce/partial/page-content-with-filter.php');
endif;
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Check if the video element exists
    if ($('video').length > 0) {
        // Video element exists
        $('video').attr('playsinline', true);
        $('video').attr('muted', "muted");
        $('video').get(0).play();
        
    } else {
        // Video element does not exist
        console.log("Video element not found.");
    }
});
</script>
<?php 

get_footer( 'shop' );
