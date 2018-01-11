<?php
	/**
	 * OnePress Licensing
	 *
	 * @author Paul Kashtanoff <paul@byonepress.com>
	 * @copyright (c) 2013, OnePress Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	// Checks if the one is already loaded.
	// We prevent to load the same version of the module twice.
	if( defined('ONP_LICENSING_000_LOADED') )
		return;
	define('ONP_LICENSING_000_LOADED', true);

	load_plugin_textdomain('onp_licensing_000', false, dirname(plugin_basename(__FILE__)) . '/langs');

	// Absolute path and URL to the files and resources of the module.
	define('ONP_LICENSING_000_DIR', dirname(__FILE__));
	define('ONP_LICENSING_000_URL', plugins_url(null, __FILE__));

	include(ONP_LICENSING_000_DIR . '/licensing.php');
	if( !is_admin() )
		return;
	include(ONP_LICENSING_000_DIR . '/includes/license-manager.class.php');