<?php
defined('ABSPATH') || exit;

/**
 * Plugin Name: Enqueue Google Fonts
 * Plugin URI: https://daan.dev/docs/omgf-pro/remove-async-google-fonts/
 * Description: This plugin enqueues your Google Fonts stylesheets that were removed by the Remove Async Google Fonts option, so OMGF Pro can replace them with local versions.
 * Version: 1.0.0
 * Author: Daan from Daan.dev
 * Author URI: https://daan.dev/
 * License: GPL2v2 or later
 */

function daan_dev_enqueue_google_fonts()
{
    wp_enqueue_style('daan-dev-google-fonts-1', 'https://fonts.googleapis.com/css?family=Poppins');
	/** 
	 *  Make sure you use a unique handle for every stylesheet you use and avoid generic words to not clash with your theme and/or plugins, 
	 *  e.g. daan-dev-google-fonts, daan-dev-google-fonts-2, daan-dev-google-fonts-3, etc.
	 */
   	wp_enqueue_style('daan-dev-google-fonts-2', 'https://fonts.googleapis.com/css?family=Roboto');
}
add_action('wp_enqueue_scripts', 'daan_dev_enqueue_google_fonts');
