add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    {
	if (current_user_can( 'update_core' )) {
		return;
	}
   //wp_deregister_style( 'amethyst-dashicons-style' ); 
   wp_deregister_style( 'dashicons' ); 
}