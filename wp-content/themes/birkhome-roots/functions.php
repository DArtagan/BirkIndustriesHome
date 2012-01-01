<?php 

/**
 * child-theme options activation
**/
include(STYLESHEETPATH."/child_options.php");

// Header Image Settings
// http://codex.wordpress.org/Function_Reference/add_custom_image_header
define('HEADER_TEXTCOLOR', '');
define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', get_stylesheet_directory_uri() . '/img/logo.png');
define('HEADER_IMAGE_WIDTH', auto);
define('HEADER_IMAGE_HEIGHT', auto);

?>