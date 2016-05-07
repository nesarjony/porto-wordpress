<?php

/**
 * Theme Functions
 * 
 * @package porto
 * @author Hunky-dory <[info@codextree.com>]>
 * @link http://www.codextree.com/porto
 */


/**
 *  Theme Support
 */

add_action( 'after_setup_theme','proto_theme_support' );

if( !function_exists('proto_theme_support') ){

	function proto_theme_support()
	{
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-format',array('aside','gallery','link','image','quote','status','video') );
	}

} 