<?php
/*
Plugin Name: WP37 update patch
Description: workaround for update process for WordPress3.7
*/

function disable_curl() {
	return false;
}

function _disable_curl() {
    add_filter('use_curl_transport', 'disable_curl');
}

function _enable_curl() {
	remove_filter('use_curl_transport', 'disable_curl');
}

$transients = array('update_plugins', 'update_themes', 'update_core');
foreach ($transients as $trainsient) {
	add_filter('pre_site_transient_'.$trainsient, '_disable_curl');
}
add_action('upgrader_process_complete', '_enable_curl');
