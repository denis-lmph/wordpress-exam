<?php
if (!defined('ABSPATH')) exit;


/**
 * Description: A place to enqueue our styles and scripts. Most should be built using the gulp process.
 */

function ebikes_enqueue_style()
{
 
  wp_enqueue_style('ebikes-main-style', ebikes_theme_uri('main.css'), false, ebikes_get_asset_version('main.css'), 'ALL');
  wp_enqueue_style( 'slick-css',  get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), '2.3.4' );
}

/** https://developer.wordpress.org/reference/functions/wp_enqueue_script/ */
function ebikes_enqueue_script()
{

  wp_enqueue_script('ebikes-main-script', ebikes_theme_uri('main.js'), '', ebikes_get_asset_version('main.js'));

  wp_enqueue_script( 'slick-slider', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.8.1', true );

  wp_enqueue_script('anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', ['jquery'], '1.8.1');
  wp_enqueue_script('jqueryui-js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', ['jquery'], '1.13.2');

  wp_enqueue_script('banner-image-slide', ebikes_theme_uri('/blocks/bannerSliderBlock/script.js'), ['jquery', 'slick-slider'], ebikes_get_asset_version('/blocks/sliderBanner/script.js'));

  wp_enqueue_script('woocommerce-catalog-slider', ebikes_theme_uri('/blocks/woocommerceCatalogBlock/script.js'), ['jquery', 'anime-js'], ebikes_get_asset_version('/blocks/woocommerceCatalogBlock/script.js'));

  
  wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), '1.0', true);
  wp_localize_script('loadmore-js', 'ajax_posts', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'noposts' => __('No older posts found', 'twentyfifteen'),
  ));
}

add_action('wp_enqueue_scripts', 'ebikes_enqueue_style');
add_action('wp_enqueue_scripts', 'ebikes_enqueue_script');


function highlight_bar_enqueue()
{
  wp_enqueue_script('highlight_bar-script', ebikes_theme_uri('/src/js/blocks/highlight_bar.js'), array('wp-blocks'));
}
add_action('enqueue_block_editor_assets', 'highlight_bar_enqueue');
