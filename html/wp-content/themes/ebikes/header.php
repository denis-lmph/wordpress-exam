<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ebikes2021
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ebikes">
    <meta name="keywords" content="Ebikes">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>

    <!-- <style>
    @import url("https://use.typekit.net/pzg7dmh.css");
    </style> -->



<?php 

$maker_io = 
'<script>
window.markerConfig = {
  project: "64a341db15cc5df632b28713", 
  source: "snippet"
};
</script>
<script>
!function(e,r,a){if(!e.__Marker){e.__Marker={};var t=[],n={__cs:t};["show","hide","isVisible","capture","cancelCapture","unload","reload","isExtensionInstalled","setReporter","setCustomData","on","off"].forEach(function(e){n[e]=function(){var r=Array.prototype.slice.call(arguments);r.unshift(e),t.push(r)}}),e.Marker=n;var s=r.createElement("script");s.async=1,s.src="https://edge.marker.io/latest/shim.js";var i=r.getElementsByTagName("script")[0];i.parentNode.insertBefore(s,i)}}(window,document);
</script>';

switch ($_SERVER['SERVER_NAME']){
	// LOCAL
	case 'ebikes.test':

        echo $maker_io; 

		break;
	// PRODUCTION
	case 'ebikes.com.au':

		break;
	case 'ebikes.ebikesclient.com':
        //STAGING

    echo $maker_io; 
		break;
}
?>
</head>

<body <?php body_class('js-scrolltween'); ?>>
    <?php wp_body_open(); ?>

    <header class="c-site-header  js-site-header ">
        <?php //include ebikes_theme_path('/partials/header_alert.php'); ?>
        <?php //include ebikes_theme_path('/partials/header_contact.php'); ?> 
        <?php include ebikes_theme_path('/partials/header_navigation.php'); ?>
    </header>