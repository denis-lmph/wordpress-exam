<?php

// Custom Woocommerce functions

/**
 * Enqueue Owl Carousel scripts and styles and initialize as a slider with variation image update.
 */
function enqueue_and_initialize_woocommerce_scripts() {

    if(is_product()){


        wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
        wp_enqueue_style( 'owl-carousel',  get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4' );

        wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
        wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.1.0' );
        wp_enqueue_script('single-product-scripts', get_stylesheet_directory_uri() . '/assets/js/single-product.script.js', array('jquery'), '1.0', true);

    }

}
add_action( 'wp_enqueue_scripts', 'enqueue_and_initialize_woocommerce_scripts' );


// Add woocommerce theme support
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 600,
        'single_image_width'    => 1000,
        'product_grid'          => array(
            'default_rows'    => 5,
            'min_rows'        => 5,
            'max_rows'        => 10,
            'default_columns' => 2,
            'min_columns'     => 2,
            'max_columns'     => 2,
        ),
    ));
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// Fixed image dimension
add_filter('woocommerce_resize_images', static function () {
    return false;
});

/**
 * Remove default product images from single product template.
 */
function remove_default_product_images() {
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_thumbnails', 20 );
}
add_action( 'wp', 'remove_default_product_images' );



function change_product_attribute_label( $label, $name, $product ) {
    // Change 'Color' attribute label to 'Select Color'
    if ( $name === 'pa_color' ) {
        $label = 'Select Colour';
    }

    if ( $name === 'pa_size' ) {
        $label = 'Select Frame Size';
    }
    
    return $label;
}

add_filter( 'woocommerce_attribute_label', 'change_product_attribute_label', 10, 3 );


// Add custom text beside price  
function modify_product_price($price, $product) {

    if(is_product() ){
        $price_with_tax = $price . '<span class="product-gst"> inc GST</span>';
    }else{
        $price_with_tax = $price ;
    }

return $price_with_tax;
}
add_filter('woocommerce_get_price_html', 'modify_product_price', 10, 2);



// // Return empty string reset variation 
// add_filter( 'woocommerce_reset_variations_link', '__return_empty_string' );



// Override default ordering dropdown woocommerce
function custom_woocommerce_catalog_orderby($sortby)
{
    // Create an empty array to hold the modified options
    $modified_sortby = array();

    // Add placeholder option
    $modified_sortby[''] = __('Sort By:', 'Placeholder');

    // Loop through the existing options and add them to the modified array
    foreach ($sortby as $key => $label) {
        $modified_sortby[$key] = $label;

        // var_dump($key." ".$label);
    }

    return $modified_sortby;
}

add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby', 20);


// Display products in carousel component select only ebikes category
function custom_product_carousel_shortcode($atts)
{
    ob_start();

    $default_atts = array(
        'limit' => 10,   // Number of products to display
    );

    $atts = shortcode_atts($default_atts, $atts, 'custom_product_carousel');

    $query_args = array(
        'post_type' => 'product',
        'posts_per_page' => intval($atts['limit']),
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'e-bikes',
            ),
        ),
    );

    $products_query = new WP_Query($query_args);

    if ($products_query->have_posts()) {
        echo '<ul class="product-carousel products" id="page-product-carousel">';

        while ($products_query->have_posts()) {
            $products_query->the_post();
            wc_get_template_part('content', 'product');
        }

        echo '</ul>';
    }

    wp_reset_postdata();

    return ob_get_clean();
}

add_shortcode('custom_product_carousel', 'custom_product_carousel_shortcode');

// Custom function to display the component block
function display_component_block()
{
    if (!is_singular('product')) {
        return;
    }
    $has_component = get_field('has_component');
    if ($has_component) :
?>
        <section class="component-block">
            <div class="row">

                <?php if (have_rows("repeat_component")) :
                    while (have_rows('repeat_component')) : the_row();

                        $component_name = get_sub_field('component_name');
                        $description = get_sub_field('description');
                        $component_image = get_sub_field('component_image');
                ?>
                        <div class="col-lg-4 col-md-12 col-sm-12 component-block-item">
                            <div class="card">
                                <img src="<?= $component_image['url']; ?>" alt="<?= $component_name; ?>" class="card-image">
                                <div class="card-content">
                                    <h3 class="card-title"><?= $component_name; ?></h3>
                                    <p class="card-description"><?= $description; ?></p>
                                </div>
                            </div>
                        </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
<?php endif; ?>
<?php
}

// Add custom function display_component_block as a callback to a do_action() hook
add_action('custom_hook_display_component_block', 'display_component_block');


// Custom function to display the component block
function display_product_specification()
{
    if (!is_singular('product')) {
        return;
    }
    $specification = get_field('specification');
    if ($specification) :

        $accordionName = 'accordion-specification';
?>
        <section class="specification-block">
            <div class="accordion" id="<?php echo $accordionName ?>">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordionName ?>-1" aria-expanded="false" aria-controls="collapseTwo">
                            Specification
                        </button>
                    </h4>
                    <div id="<?php echo $accordionName ?>-1" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?= $specification ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php endif; ?>
<?php
}

// Add custom function display_product_specification as a callback to a do_action() hook
add_action('custom_hook_display_product_specification', 'display_product_specification');



// Custom function to display the display product category block v1 block
function display_product_category_block_v1()
{
    if (!is_singular('product')) {
        return;
    }

    $heading = get_field('pcsb_option_heading', 'options');
    $product_category_columns = get_field('pcsb_option_product_category_columns', 'options');
    $shop_link = get_field('pcsb_option_shop_link', 'options');

?>
    <section class="product-category-showcase section product-category-showcase-v1">
        <div class="product-category-showcase__content">
            <div class="row">
                <?php if ($heading) : ?>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="product-category-showcase__heading-wrapper">
                            <h2 class="product-category-showcase__heading"><?= $heading; ?></h2>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($shop_link) : ?>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="product-category-showcase__shop-wrapper top">
                            <a href="<?= $shop_link['url']; ?>" class="shop-link p-bold"><?= $shop_link['title']; ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row">
                <?php if (have_rows('pcsb_option_product_category_columns', 'options')) : ?>
                    <?php while (have_rows('pcsb_option_product_category_columns', 'options')) : the_row();
                        $product_category_image = get_sub_field('product_category_image');
                        $product_category_title = get_sub_field('product_category_title');
                        $product_category_link = get_sub_field('product_category_link');
                ?>
                        <div class="col-lg-3 col-md-12 col-sm-12 product-category-showcase__item">
                            <a href="<?= $product_category_link['url'] ?>">
                                <div class="product-category-showcase__item__container">
                                <?php if ($product_category_image) : ?>
                                    <img class="product-category-showcase__item__images" src="<?= $product_category_image['url']; ?>" />
                                <?php endif; ?>    
                                    <div class="product-category-showcase__item__content">
                                        <p>Shop</p>
                                        <h4 class="product-category-showcase__item__title"><?= $product_category_title ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if ($shop_link) : ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="product-category-showcase__shop-wrapper bottom">
                            <a href="<?= $shop_link['url']; ?>" class="shop-link p-bold"><?= $shop_link['title']; ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>
<?php
}

// Add custom function display_product_category_block_v1 as a callback to a do_action() hook
add_action('custom_hook_display_product_category_block_v1', 'display_product_category_block_v1');


// Track last view product
function custom_track_product_view() {
    if ( ! is_singular( 'product' ) ) {
        return;
    }
  
    global $post;
  
    if ( empty( $_COOKIE['woocommerce_recently_viewed'] ) )
        $viewed_products = array();
    else
        $viewed_products = (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] );
  
    if ( ! in_array( $post->ID, $viewed_products ) ) {
        $viewed_products[] = $post->ID;
    }
  
    if ( sizeof( $viewed_products ) > 15 ) {
        array_shift( $viewed_products );
    }
  
    // Store for session only
    wc_setcookie( 'woocommerce_recently_viewed', implode( '|', $viewed_products ) );
  }
  
add_action( 'template_redirect', 'custom_track_product_view', 20 );

// Custom function to display the display recently viewed product block
function display_recently_viewed_products()
{
    if (!is_singular('product')) {
        return;
    }
    
    if(!isset($_COOKIE['woocommerce_recently_viewed'])): 

        return false;
        
    endif; 
?>
   <?php $recently_viewed = isset($_COOKIE['woocommerce_recently_viewed']) ? (array) explode('|', $_COOKIE['woocommerce_recently_viewed']) : array();?>

    <section class="recently-viewed-carousel">
       
        <div class="recently-viewed-carousel__heading-wrapper">
            <h2 class="recently-viewed__title">Recently viewed</h2>
        </div>

        <?php
     

        // Remove duplicates and limit the array to a specific number of products
        $recently_viewed = array_unique($recently_viewed);

        // Sort the array in reverse order to display the last viewed item first
        $recently_viewed = array_reverse($recently_viewed);
        // Create the object
        ob_start();
        // Limit the array to 4 products
        $recently_viewed = array_slice($recently_viewed, 0, 10);
        echo '<ul class="recently-viewed-carousel__product-carousel product-carousel" id="recently-viewed-carousel">';
        // Loop through the product IDs and display the products
        if (!empty($recently_viewed)) {
            foreach ($recently_viewed as $product_id) {
                $product = wc_get_product($product_id);
                $post_object = get_post($product_id);
                setup_postdata($GLOBALS['post'] =& $post_object);
                wc_get_template_part('content', 'product');
                //wc_get_template_part('content', 'product', array('product_id' => $product_id));

            }

            echo '</ul>';
        } else {
            //echo '<p>No recently viewed products.</p>';
        }

        wp_reset_postdata(); ?>
    </section>

<?php
}

// Add custom function display_recently_viewed_products as a callback to a do_action() hook
add_action('custom_hook_display_recently_viewed_products', 'display_recently_viewed_products');


/**
 * Display product image slider before single product summary.
 */
function display_product_image_slider() {
    global $product;

    // Get the product gallery images.
    $attachment_ids = $product->get_gallery_image_ids();
    array_unshift($attachment_ids, $product->get_image_id());

    // Check if there are any images to display.
    if ( $attachment_ids ) {
        ?>
        <div id="product-image-slider" class="owl-carousel product-image-slider">
            <?php
            // Loop through the attachment IDs and display the images.
            $wtf = 0;
            foreach ( $attachment_ids as $attachment_id ) {
                $image_link = wp_get_attachment_url( $attachment_id );
                $image_title = get_the_title( $attachment_id );

                $is_banner = get_field( 'display_as_banner', $attachment_id );
                $class  = $is_banner ? 'img-cover' : 'img-contain'; 
                $main_product_image  = (  $wtf == 0) ? 'product-main-image' : 'product-gallery-image'; 
                ?>
                <div class="item <?= $class ; ?>" >
                    <a data-item-index="<?=  $wtf;  ?>" href="<?php echo esc_url( $image_link ); ?>" class="product-image-link">
                        <img class="carousel-image <?=   $main_product_image   ?>" src="<?php echo esc_url( $image_link ); ?>" alt="<?php echo esc_attr( $image_title ); ?>"/>
                    </a>
                </div>
                <?php

                $wtf++;
            }
            ?>
        </div>
        <?php
    }
}
add_action( 'woocommerce_before_single_product_summary', 'display_product_image_slider', 5 );

/**
 * Update variation image when attributes are updated.
 */
function update_variation_image_on_attribute_change( $variation ) {
    $variation_id = $variation->get_id();
    $product_id = $variation->get_parent_id();

    $variation_product = wc_get_product( $variation_id );
    $variation_gallery = $variation_product->get_gallery_image_ids();

    if ( ! empty( $variation_gallery ) ) {
        $variation_data = [];

        foreach ( $variation->get_variation_attributes() as $attribute_name => $attribute_value ) {
            $variation_data['attribute_' . sanitize_title( $attribute_name ) ] = $attribute_value;
        }

        $variation_data['variation_id'] = $variation_id;
        $variation_data['variation_gallery'] = $variation_gallery;

        update_post_meta( $product_id, '_variation_gallery_' . $variation_id, $variation_data );
    }
}
add_action( 'woocommerce_update_variation_values', 'update_variation_image_on_attribute_change' );



// Add custom class add to cart button

function add_custom_class_to_add_to_cart_button($link, $product) {
    // Add your custom class to the existing classes
    $classes = 'button--dark-blue';

    // Append the custom class to the button link
    $link = str_replace('class="', 'class="'. $classes . ' ', $link);

    return $link;
}
add_filter('woocommerce_loop_add_to_cart_link', 'add_custom_class_to_add_to_cart_button', 10, 2);


function ts_quantity_minus_sign() {
    echo '<div class="field-group-quantity"><button type="button" class="minus">-</button>';
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign' );

function ts_quantity_plus_sign() {
    echo '<button type="button" class="plus">+</button></div>';
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign' );




// Customizing the Subtotal label in WooCommerce cart totals
function custom_subtotal_label( $translated_text, $text, $domain ) {
    if ( $text === 'Subtotal' && $domain === 'woocommerce' ) {
        $translated_text = 'Subtotal inc GST';
    }
    return $translated_text;
}
add_filter( 'gettext', 'custom_subtotal_label', 20, 3 );
