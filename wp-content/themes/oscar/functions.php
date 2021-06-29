<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('oscar_register_nav_menu')) {

	function oscar_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'oscar'),
			'primary_right' => __('Menu Derecha', 'oscar'),
			'footer_menu'  => __('Menu Footer', 'oscar'),
		));
	}
	add_action('after_setup_theme', 'oscar_register_nav_menu', 0);
}

function agrega_mime_type ( $mime_types ) {
	$mime_types['webp'] = 'image/webp';
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;}
   
   add_filter('upload_mimes', 'agrega_mime_type', 1, 1);
