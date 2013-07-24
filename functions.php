<?php
/**
* theme constants
*/
/*
* Lowercase theme slug which is also theme directory
*/
define('DION_THEME_SLUG','wpdion');
define('DION_THEME_URL',get_stylesheet_directory_uri());
define('DION_THEME_DIR',get_stylesheet_directory());

if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */



require DION_THEME_DIR.'/inc/vendor/autoload.php';
	
DionThemeSetup::getInstance();




