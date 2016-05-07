<?php

/**
 *  Menu Functions
 *  @package Porto THeme
 *  @author  Hunky-dory <info@codextree.com>
 *  @link http://codextree.com
 *  
 */ 

/* ---------------------------------------------------------------------------------------------
 * Register a menu location to use with navigation menu
------------------------------------------------------------------------------------------------*/
register_nav_menu( 'main-menu',            __( 'Main Menu | depth 5 (Header Overlay 1)', 'porto' ) );
register_nav_menu( 'Secondary',            __( 'Secondary Menu | depth 2 (Header Overlay 1)', 'porto' ) );
register_nav_menu( 'social-menu-top',      __( 'Social Menu Top | depth 1 (Header Overlay 1)', 'porto' ) );

/* ------------------------------------------------------------------------------------------------
 * Main Menu
 * ------------------------------------------------------------------------------------------------ */
 
 function  portoWpNavMenu()
 {
 	$args = array(
 			'theme_location' => 'main-menu',
 			'container'		 => 'nav',
 			'menu_class'     => 'nav nav-pills',
 			'menu_id'		 => 'mainNav',
 			'fallback_cv'	 => 'portoWpPageMenu',
 			'depth'          => 5,
 			'walker' 		 => new portoMainMenuWalker()
 		); 

 	wp_nav_menu($args);
 }

 function portoWpPageMenu()
 {
 	$args = array(
 			'title_li'    => '0',
 			'sort_column' => 'menu_order',
 			'depth'		  => 2
 		);

 	echo '<nav>';
 		echo '<ul class="nav nav-pills" id="mainNav">';
 			wp_list_pages($args);
 		echo "</ul>";
 	echo "</nav>";
							
								
 }

/*
 function porto_social_menu()
 {
 		$args = array(
 				'theme-location' => 'social-menu-top',
 				'container'       => 'ul',
 				'container_class' => 'social-icons',
 				'container_id'	  => false,
 				'menu_class'   	  => 'social-icons',
 				'depth'		      => 1,
 				'fallback_cv'     => false
 			);
		wp_nav_menu($args);
 }
  */
 