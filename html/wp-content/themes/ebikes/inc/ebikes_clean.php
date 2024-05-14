<?php
if (!defined('ABSPATH')) exit;

/**
 * Description: Remove or clean up Wordpress defaults.
 */

// Turn off auto update
// define('WP_AUTO_UPDATE_CORE', false);
// add_filter('auto_update_theme', '__return_false');

// ONLY UPDATE 2pm - 6pm UTC  (1am - 5am AEDT)
// define('WP_AUTO_UPDATE_CORE', true);
// $updates_suspended = (date('Hi') < 1400 || date('Hi') > 1800);
// define( 'AUTOMATIC_UPDATER_DISABLED', $updates_suspended );