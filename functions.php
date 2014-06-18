<?php
add_action( 'after_setup_theme', 'child_theme_setup' );

if ( !function_exists( 'child_theme_setup' ) ):
function child_theme_setup() {

	register_sidebar( array(
		'name' => __( 'Frontpage Trailers', 'kkanalen' ),
		'id' => 'sidebar-trailers-1',
		'description' => __( 'A widget area for film trailers on the front page', 'kkanalen' ),
		  'before_title'  => '<div class="widget-title"><h3>',
		  'after_title'   => '</h3></div>',
		  'before_widget' => '<div id="%1$s" class="grid col-300 %2$s"><div class="widget-wrapper">',
		  'after_widget'  => '</div></div>'		
	) );

}
endif;


/* Add fit class to third trailer widget */
function responsive_trailer_widgets( $params ) {

	global $footer_widget_num; //Our widget counter variable

	//Check if we are displaying "Footer Sidebar"
	if ( $params[0]['id'] == 'sidebar-trailers-1' ) {
		$footer_widget_num++;
		$divider = 3; //This is number of widgets that should fit in one row

		//If it's third widget, add last class to it
		if ( $footer_widget_num % $divider == 0 ) {
			$class                      = 'class="fit ';
			$params[0]['before_widget'] = str_replace( 'class="', $class, $params[0]['before_widget'] );
		}

	}

	return $params;
}
add_filter( 'dynamic_sidebar_params', 'responsive_trailer_widgets' );


?>