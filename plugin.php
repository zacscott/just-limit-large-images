<?php
/**
 * Plugin Name: Just Limit Large Images
 * Version:     1.0.0
 * Author:      Zac Scott
 * Author URI:  https://zacscott.net
 * Description: Improve page speed by limiting the default image sizes.
 * Text Domain: just-limit-large-images
 */

require dirname( __FILE__ ) . '/vendor/autoload.php';

define( 'JUST_LIMIT_LARGE_IMAGES_PLUGIN_ABSPATH', dirname( __FILE__ ) );
define( 'JUST_LIMIT_LARGE_IMAGES_PLUGIN_ABSURL', plugin_dir_url( __FILE__ )  );

// Boot each of the plugin logic controllers.
new \JustLimitLargeImages\Controller\LimitImageSizeController();
