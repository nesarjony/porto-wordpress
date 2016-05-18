<?php

	require_once 'widget-social-icon.php';

	// Footer Sidebar
	
if ( ! function_exists( 'footer_sidebar' ) ) {

	// Register Sidebars
	function portoRegisterSidebar() {
		for($i = 1;$i <= 4;$i++):
			$args = array(
				'id'            => 'footer-area-'.$i,
				'name'          => __( "Footer | #$i", 'porto' ),
				'description'   => __( 'Appears in the Footer section of the site.', 'porto' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> '</aside>',
				'before_title' 	=> '<h4>',
				'after_title' 	=> '</h4>',
			);
			register_sidebar( $args );
		endfor;

		// Register Left Sidebar
		
		$args = array(
				'id'            => 'left-sidebar',
				'name'          => __( "Left Sidebar", 'porto' ),
				'description'   => __( 'Appears if theme left sidebar is enable On Current Page', 'porto' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> '</aside>',
				'before_title' 	=> '<h4>',
				'after_title' 	=> '</h4>',
			);
			register_sidebar( $args );

		$args = array(
				'id'            => 'right-sidebar',
				'name'          => __( "Right Sidebar", 'porto' ),
				'description'   => __( 'Appears if theme Right Sidebar is enable On Current Page', 'porto' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> '</aside>',
				'before_title' 	=> '<h4>',
				'after_title' 	=> '</h4>',
			);
			register_sidebar( $args );

	}


}
add_action( 'widgets_init', 'portoRegisterSidebar' );

// Left Sidebar
