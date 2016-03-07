<?php 
require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
			'primary' => __('Primary Menu', 'verduursamen')
		) );
   
add_theme_support( 'post-thumbnails' ); 

