<?php
/**
 * :plugin_name
 *
 * @wordpress-plugin
 * Plugin name:         :plugin_name
 * Description:         :plugin_description
 * Version:             0.1.0
 * Requires at least:   6.0
 * Requires PHP:        8.0
 * Author:              :author_name
 * Author URI:          :plugin_website
 * Text Domain:         :plugin_textdomain
 * Domain Path:         /languages
 * License:             MIT
 */

use VendorName\Skeleton;

define('PLUGIN_CONSTANT_PREFIX_PLUGIN_VERSION', '0.1.0');
define('PLUGIN_CONSTANT_PREFIX_PLUGIN_FILE', __FILE__);
define('PLUGIN_CONSTANT_PREFIX_PLUGIN_DIR', __DIR__);

if (! class_exists(Skeleton::class)) {
    if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
        require_once __DIR__.'/vendor/autoload_packages.php';
    }
}

function plugin_function_name()
{
    return Skeleton::instance();
}

plugin_function_name();
