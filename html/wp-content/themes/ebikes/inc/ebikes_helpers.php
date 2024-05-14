<?php
if (!defined('ABSPATH')) exit;

/**
 * Description: A collection of common functions used throughout EBIKES theme builds
 */

/**
 * Are we local or remote
 */
function ebikes_isRemote($src)
{
	return (substr($src, 0, 4) === 'http' || substr($src, 0, 2) === '//');
}


/**
* constructs the full path based on the given relative path, assumed to be
* relative to the theme directory. The relative path must contain the starting
* slash.
*/
function ebikes_theme_path($relative = '')
{
// use a static local here, so we only calculate this value once.
static $theme_base_path = null;
if ($theme_base_path == null) {
$theme_base_path = get_stylesheet_directory();
}

if (!(substr($relative, 0, 1) == '/')) {
$relative = '/' . $relative;
}

return $theme_base_path . $relative;
}

/**
* constructs a full URI based on the given relative URI. assumed to be
* relative to the theme directory. The relative URI must be passed with the
* starting slash (i.e. /css/main.css, not css/main.css)
*/
function ebikes_theme_uri($relative = '')
{
// use a static local here, so we only calculate this value once.
static $theme_base_uri = null;
if ($theme_base_uri == null) {
$theme_base_uri = get_stylesheet_directory_uri();
}

if (!(substr($relative, 0, 1) == '/')) {
$relative = '/' . $relative;
}

return $theme_base_uri . $relative;
}

/**
* returns a version number for the theme asset, based on an asset cache file
* (automatically generated in the gulp build process)
*/
function ebikes_get_asset_version($relativeUrl)
{
$result = null;
static $assetMappings = null;
if ($assetMappings == null) {
$assetFilepath = ebikes_theme_path('/assets.json');

$fileContents = null;
if (file_exists($assetFilepath)) {
$fileContents = file_get_contents($assetFilepath);
}

if ($fileContents) {
$assetMappings = json_decode($fileContents, true);
} else {
$assetMappings = array();
}
}

if (array_key_exists($relativeUrl, $assetMappings)) {
$result = $assetMappings[$relativeUrl];
}

return $result;
}

/**
* Async or defer scripts when loaded using wp_enqueue_script
*/
function ebikes_async_defer_script($tag, $handle)
{
$defer_handles = [
//'ebikes-main'
];

$async_handles = [
'ebikes-main',
'vendor-fontawesome-script'
];

if (in_array($handle, $defer_handles)) {
return str_replace('src=', 'defer src=', $tag);
}

if (in_array($handle, $async_handles)) {

return str_replace('src=', 'async src=', $tag);
}

return $tag;
}
add_filter('script_loader_tag', 'ebikes_async_defer_script', 10, 2);

// svg upload support
function upload_svg_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'upload_svg_types');
// Masonary columns for locations on contact page


function ebikes_widgets_init() {
    register_sidebar( array(
        'name' => 'Sidebar widget',
        'id' => 'sidebar_categories',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div>',
        'after_title' => '</div>',
    ) );
}

add_action( 'widgets_init', 'ebikes_widgets_init' );

if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'gallery-thumb', 420, 270, true );
}

function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-12 col-sm-6 col-md-4 py-4 d-flex">
                    <a href="'.get_permalink( $post->ID ).'">
                    <div class="blog-post-wrapper">
                        <div class="postimage">'. get_the_post_thumbnail().'
                        </div>
                        <div class="posttext"> 
                            <p class="posttitle py-3">'.get_the_title().'</p>
                            <p>'.get_the_excerpt().'</p>
                            <p class="postreadmore">Read more</p>   
                        </div>
                    </div>
                    </a>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

/* Custom Pagination Bar */
function archive_pagination_bar( $custom_query ) {

  $total_pages = $custom_query->max_num_pages;
  $big = 999999999; // need an unlikely integer

  if ($total_pages > 1){
      $current_page = max(1, get_query_var('paged'));

      echo paginate_links(array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => $current_page,
          'total' => $total_pages,
      ));
  } else {
    echo "<h4>No more posts to show.</h4>";
  }
}