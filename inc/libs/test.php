<?php

/**
 * 
 * @package Porto theme
 * @author [hunky-dory] <[info@codextree.com>]>
 * @link http://codextree.com/porto
 * 
 */


if( !function_exists( 'porto_style' ) )
{
	function porto_style()
	{
		wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css', false, '', 'all' );

		wp_enqueue_style( 'bootstrap',         THEME_ASSETS   .'/vendor/bootstrap/css/bootstrap.css', false, '3.3.5', 'all' );
		wp_enqueue_style( 'fontawesome',       THEME_ASSETS   .'/vendor/font-awesome/css/font-awesome.css', false, '4.4.0', 'all' );
		wp_enqueue_style( 'simple-line-icons', THEME_ASSETS   .'/vendor/simple-line-icons/css/simple-line-icons.css', false, '1.1.0', 'all' );
		wp_enqueue_style( 'owlcarousel',       THEME_ASSETS   .'/vendor/owl.carousel/assets/owl.carousel.min.css', false, '2.0.0', 'all' );
		wp_enqueue_style( 'owlcarousel-theme', THEME_ASSETS   .'/vendor/owl.carousel/assets/owl.theme.default.min.css', false, '2.0.0', 'all' );
		wp_enqueue_style( 'magnific-popup',    THEME_ASSETS   .'/vendor/magnific-popup/magnific-popup.css', false, '1.0.0', 'all' );

		# Theme Base CSS
		wp_enqueue_style( 'owlcarousel-theme', THEME_ASSETS .'/vendor/owlcarousel/owl.theme.default.min.css', false, '2.0.0', 'all' );
		wp_enqueue_style( 'theme-base',        THEME_ASSETS .'/css/theme.css', false, THEME_VERSION, 'all' );
		wp_enqueue_style( 'theme-elements',    THEME_ASSETS .'/css/theme-elements.css', false, THEME_VERSION, 'all' );
		wp_enqueue_style( 'theme-blog',        THEME_ASSETS .'/css/theme-blog.css', false, THEME_VERSION, 'all' );
		wp_enqueue_style( 'theme-shop',        THEME_ASSETS .'/css/theme-shop.css', false, THEME_VERSION, 'all' );
		wp_enqueue_style( 'theme-animate',     THEME_ASSETS .'/css/theme-animate.css', false, THEME_VERSION, 'all' );
		wp_enqueue_style( 'theme-custom',      THEME_ASSETS .'/css/custom.css', false, THEME_VERSION, 'all' );

		if(!portoSkinCheck()){
			wp_enqueue_style( 'theme-default', THEME_ASSETS .'/css/skins/default.css', false, THEME_VERSION, 'all' );
		}else{
			wp_enqueue_style( 'theme-skin', THEME_ASSETS .'/css/skins/dynamic.css', false, THEME_VERSION, 'all' );
		}
		
	}
}
 
add_action( 'wp_enqueue_scripts','porto_style' );

function portoSkinCheck()
{
	$skin = cs_get_option('skin');
	//echo $skin;
	$skinOptions = portoSkinGeneateDefault( $skin );
 
	ob_start();
  
	include_once THEME_DIR . '/style.php';

	$css = ob_get_contents();
	ob_get_clean();

	$filename = THEME_DIR . "/assets/css/skins/dynamic.css";

	$handle = file_put_contents($filename, $css);
	return $handle;
}


if( !function_exists( 'porto_js' ) )
{
	function porto_js()
	{
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'modernizr', THEME_ASSETS .'/vendor/modernizr/modernizr.js', false, THEME_VERSION, false );

		

		wp_enqueue_script( 'jquery-appear', THEME_ASSETS .'/vendor/jquery.appear/jquery.appear.js', false, THEME_VERSION, true );
		wp_enqueue_script( 'jquery-easing', THEME_ASSETS .'/vendor/jquery.easing/jquery.easing.js', false, '1.3', true );
		wp_enqueue_script( 'jquery-cookie',THEME_ASSETS .'/vendor/jquery-cookie/jquery-cookie.js', false, '1.4.1',  true );
		wp_enqueue_script( 'style-switcher',THEME_ASSETS .'/master/style-switcher/style.switcher.js', false, '1.4.1',  true );
		wp_enqueue_script( 'bootstrap', THEME_ASSETS .'/vendor/bootstrap/js/bootstrap.js', false, '3.3.5', true );
		wp_enqueue_script( 'common', THEME_ASSETS .'/vendor/common/common.js', false, THEME_VERSION, true );
		wp_enqueue_script( 'jquery-validation', THEME_ASSETS .'/vendor/jquery.validation/jquery.validation.js', false, '1.14.0', true );
		wp_enqueue_script( 'jquery-stellar', THEME_ASSETS .'/vendor/jquery.stellar/jquery.stellar.js', false, '0.6.2', true );
		wp_enqueue_script( 'jquery-pie-chart', THEME_ASSETS .'/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js', false, '2.1.6', true );
		wp_enqueue_script( 'jquery-gmap', THEME_ASSETS .'/vendor/jquery.gmap/jquery.gmap.js', false, '2.1.5', true );
		wp_enqueue_script( 'jquery-lazyload', THEME_ASSETS .'/vendor/jquery.lazyload/jquery.lazyload.js', false, '1.9.7', true );
		wp_enqueue_script( 'jquery-isotope', THEME_ASSETS .'/vendor/isotope/jquery.isotope.js', false, '2.2.0', true ); 

		# Ovl Carousel
		wp_enqueue_script( 'owlcarousel', THEME_ASSETS .'/vendor/owl.carousel/owl.carousel.js', false, '2.0.0', true );
		# Magnific - popup
		//wp_enqueue_script( 'jflickrfeed',THEME_ASSETS .'/vendor/jflickrfeed/jflickrfeed.js', false, false, true );
		wp_enqueue_script( 'magnific-popup', THEME_ASSETS .'/vendor/magnific-popup/jquery.magnific-popup.js', false, THEME_VERSION, true );
		# vide
		wp_enqueue_script( 'vide', THEME_ASSETS .'/vendor/vide/vide.js', false, '0.3.7', true );

		# Theme scripts
		wp_enqueue_script( 'theme-base', THEME_ASSETS .'/js/theme.js' ,false, THEME_VERSION, true );
		wp_enqueue_script( 'theme-custom', THEME_ASSETS .'/js/custom.js', false, THEME_VERSION, true );
		wp_enqueue_script( 'theme-init', THEME_ASSETS .'/js/theme.init.js', false, THEME_VERSION, true );
	}
}

add_action( 'wp_enqueue_scripts','porto_js' );

if( !function_exists('porto_ie_fix') )
{
	function porto_ie_fix()
	{
		echo '<!--[if IE]>';
		echo '<link rel="stylesheet" href='. THEME_ASSETS .'"css/ie.css">';
		echo '<![endif]-->';

		echo '<!--[if lte IE 8]>';
		echo '<script src='. THEME_ASSETS .'"vendor/respond/respond.js"></script>';
		echo '<script src='. THEME_ASSETS .'"vendor/excanvas/excanvas.js"></script>';
		echo '<![endif]-->';
	}
}

add_action( 'wp_head','porto_ie_fix' );

if( !function_exists('portoLogo') )
{
	function portoLogo( $shape )
	{
		echo '<a href="';
		echo cs_get_option('logo_options_home_page') ? '' : '#';
		echo '">';
			 if(cs_get_option('logo')):
			 	$image =  wp_get_attachment_image_src(cs_get_option('logo'),'full');
			 	echo '<img alt="Porto" width="'.$shape['width'].'" height="'.$shape['height'].'" data-sticky-width="'.$shape['data-sticky-width'].'" data-sticky-height="'.$shape['data-sticky-height'].'" data-sticky-top="'.$shape['data-sticky-top'].'" src="'.$image[0].'"> ';
			 elseif(cs_get_option('text_logo')):
			 	echo "<h2>".cs_get_option('text_logo') ? cs_get_option('text_logo') : "Your Logo" . "</h2>";
			 endif;

	    echo  "</a>\n";
	}
}

function portoSocialMedia( $ul_additioal_classes = false )
{
	if( $ul_additioal_classes )
		$classes = "social-icons-transparent social-icons-icon-light pull-right ml-xs mt-xs";
	else
		$classes = "";

		echo '<ul class="header-social-icons social-icons '.$classes.'hidden-xs">';
		$target = cs_get_option('social_new_tab') ? '_blank' : '';
 
		$items = array( 'skype','facebook','twitter','linkedin','github','googleplus','vimeo','youtube','instagram','behance','tumblr','wordpress','yahoo','vkontakte','viadeo','xing');

		foreach($items as $item):
			if(cs_get_option($item)):
		  	 	echo '<li class="social-icons-'.$item.'"><a href="';
		  	 	echo cs_get_option($item);
		  	    echo '" target="'.$target.'" title="'.ucfirst($item).'"><i class="fa fa-'.$item.'"></i></a></li>';
		  	endif;
		 endforeach;

		 echo '</ul>';			
					
}

function portoSearch( $type = 'regular' )
{
			echo  '<div class="header-search hidden-xs">';
					echo '<form id="searchForm" action="page-search-results.html" method="get">';
					echo  '<div class="input-group">';
					echo  '<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>';
					echo '<span class="input-group-btn">';
					echo  '<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>';
					echo '</span>';
					echo  '</div>';
					echo  '</form>';
			 echo  '</div>';
}
 
function portoTopRowMenu( ) 
{
	echo '<nav class="header-nav-top">';
	echo '<ul class="nav nav-pills">';

	if(cs_get_option('toprow_menu_one')):

		$id =  cs_get_option('toprow_menu_one');
		$page = get_post($id);

		echo  '<li class="hidden-xs">';
		echo  '<a href="'.get_permalink($id).'"><i class="fa fa-angle-right"></i>'.$page->post_title.'</a>';
		echo  '</li>';
	endif;

	if(cs_get_option('toprow_menu_two')):

		$id =  cs_get_option('toprow_menu_two');
		$page = get_post($id);

		echo  '<li class="hidden-xs">';
		echo '<a href="'.get_permalink($id).'"><i class="fa fa-angle-right"></i>'.$page->post_title.'</a>';
		echo  '</li>';
	endif;

	if( cs_get_option('wpml_key') ):
		 language_dropdown();
	endif;

	if(cs_get_option('toprow_phone_number')):
		echo  '<li class="phone">';
		echo  '<span class="ws-nowrap"><i class="fa fa-phone"></i>'.cs_get_option('toprow_phone_number').'</span>';
		echo  '</li>';
	endif;

	echo  '</ul>';
	echo '</nav>';
	
}
if(!function_exists('language_dropdown'))
{
	function language_dropdown( $li = true )
	{
		echo $li ? '<li>' : '';
			echo '<a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
					 echo '<img src="'.THEME_ASSETS.'/img/blank.gif'.'" class="flag flag-us" alt="English" /> English<i class="fa fa-angle-down"></i>';
			echo '</a>';
			echo '<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">';
				echo '<li><a href="#"><img src="'.THEME_ASSETS.'/img/blank.gif'.'" class="flag flag-us" alt="English" /> English</a></li>';
				echo '<li><a href="#"><img src="'.THEME_ASSETS.'/img/blank.gif'.'" class="flag flag-es" alt="Español" /> Español</a></li>';
				echo '<li><a href="#"><img src="'.THEME_ASSETS.'/img/blank.gif'.'" class="flag flag-fr" alt="Française" /> Française</a></li>';
			echo '</ul>';
		 echo $li ?'</li>':'';
	}
} 

if(!function_exists('portoTopbarInfo'))
{
	function portoTopbarInfo()
	{
		echo '<p>';
		echo cs_get_option('topbar_slogan') ? cs_get_option('topbar_slogan') : '';
		if(cs_get_option('topbar_phone')){
			echo '<span class="ml-xs"><i class="fa fa-phone"></i>'.cs_get_option('topbar_phone').'</span>';
		}
		if(cs_get_option('topbar_email')){
			echo '<span class="hidden-xs"> | <a href="#">'.cs_get_option('topbar_email').'</a></span>';
		}
		echo '</p>';
	}
}

if( !function_exists('portoHeaderOptions') )
{
	function portoHeaderOptions( $layout='default' )
	{
		#Header class
		$header_class = [
				 'Default'      		   => '',
				 'LanguageDropdown'		   => '',
				 'Flat'			           => 'header-mobile-nav-only',
				 'FlatTopBar' 		       => 'header-mobile-nav-only',
				 'FlatTopBarSearch' 	   => 'header-mobile-nav-only',
				 'FlatColoredTopBar'	   => 'header-mobile-nav-only',
				 'BigLogo'				   => '',
				 'LogoNavbarCenter' 	   => '',
				 'AlwaysSticky' 		   => '',
				 'BellowSlider' 		   => 'header-narrow',
				 'FullVideo' 			   => 'header-narrow',
				 'Transparent' 			   => 'header-narrow header-transparent',
				 'SemiTransparent' 		   => 'header-narrow header-semi-transparent',
				 'SemiTransparentLight'    => 'header-narrow header-semi-transparent-light',
				 'TransparentBottomBorder' => 'header-narrow header-transparent header-transparent-bottom-border',
				 'NavigationTopLine' 	   => 'header-mobile-nav-only',
				 'FullWidth' 		 	   => 'header-narrow header-full-width',
				 'Narrow' 				   => 'header-narrow',
				 'Navbar'				   => 'header-no-border-bottom',
				 'NavbarExtraInfo'         => 'header-no-border-bottom',
				 'DarkDropdown'            => 'header-mobile-nav-only'
			];

		$data_plugin_options = [
				 'Default'      		   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}',
				 'LanguageDropdown'		   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}',
				 'BigLogo'				   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyChangeLogoWrapper": false, "stickyStartAt": 1, "stickySetTop": "0", "stickyChangeLogo": true}',
				 'Flat'			           => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}',
				 'FlatTopBar' 		       => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 90, "stickySetTop": "-90px", "stickyChangeLogo": true}',
				 'FlatTopBarSearch' 	   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 90, "stickySetTop": "-90px", "stickyChangeLogo": true}',
				 'FlatColoredTopBar'	   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 90, "stickySetTop": "-90px", "stickyChangeLogo": true}',
				 'LogoNavbarCenter' 	   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 140, "stickySetTop": "-140px"}',
				 'AlwaysSticky' 		   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0", "stickyChangeLogo": false}',
				 'BellowSlider' 		   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAtElement": "#header", "stickySetTop": "0", "stickyChangeLogo": false}',
				 'FullVideo' 			   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAtElement": "#header", "stickySetTop": "0", "stickyChangeLogo": false}',
				 'Transparent' 			   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}',
				 'SemiTransparent' 		   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}',
				 'SemiTransparentLight'    => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}',
				 'TransparentBottomBorder' => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}',
				 'NavigationTopLine' 	   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}',
				 'FullWidth' 		 	   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0"}',
				 'Narrow' 				   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0"}',
				 'Navbar'				   => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 120, "stickySetTop": "-120px", "stickyChangeLogo": false}',
				 'NavbarExtraInfo'         => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-148px", "stickyChangeLogo": false}',
				 'DarkDropdown'            => '{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'
			];

		$logo_column = [
				 'Default'      		   => 'header-column',
				 'LanguageDropdown'		   => 'header-column',
				 'BigLogo'				   => 'header-column',
				 'Flat'			           => 'header-column',
				 'FlatTopBar' 		       => 'header-column',
				 'FlatTopBarSearch' 	   => 'header-column',
				 'FlatColoredTopBar'	   => 'header-column',
				 'LogoNavbarCenter' 	   => 'header-column header-column-center',
				 'AlwaysSticky' 		   => 'header-column',
				 'BellowSlider' 		   => 'header-column',
				 'FullVideo' 			   => 'header-column',
				 'Transparent' 			   => 'header-column',
				 'SemiTransparent' 		   => 'header-column',
				 'SemiTransparentLight'    => 'header-column',
				 'TransparentBottomBorder' => 'header-column',
				 'NavigationStripe'        => 'header-column',
				 'NavigationTopLine' 	   => 'header-column',
				 'FullWidth' 		 	   => 'header-column',
				 'Narrow' 				   => 'header-column',
				 'Navbar'				   => 'header-column',
				 'NavbarExtraInfo'         => 'header-column',
				 'DarkDropdown'            => ''
			];

		$nav_section_class = [
				 'Default'      		   => 'header-nav',
				 'LanguageDropdown'		   => 'header-nav',
				 'BigLogo'				   => 'header-nav',
				 'Flat'			           => 'header-nav header-nav-stripe',
				 'FlatTopBar' 		       => 'header-nav header-nav-stripe',
				 'FlatTopBarSearch' 	   => 'header-nav header-nav-stripe',
				 'FlatColoredTopBar'	   => 'header-nav header-nav-stripe',
				 'LogoNavbarCenter' 	   => 'header-container container header-nav header-nav-center',
				 'AlwaysSticky' 		   => 'header-nav',
				 'BellowSlider' 		   => 'header-nav',
				 'FullVideo' 			   => 'header-nav',
				 'Transparent' 			   => 'header-nav header-nav-stripe',
				 'SemiTransparent' 		   => 'header-nav header-nav-stripe',
				 'SemiTransparentLight'    => 'header-nav header-nav-stripe',
				 'TransparentBottomBorder' => 'header-nav header-nav-stripe',
				 'NavigationTopLine' 	   => 'header-nav header-nav-top-line',
				 'FullWidth' 		 	   => 'header-nav',
				 'Narrow' 				   => 'header-nav',
				 'Navbar'				   => 'header-container header-nav header-nav-bar',
				 'NavbarExtraInfo'         => 'header-container header-nav header-nav-bar header-nav-bar-primary',
				 'DarkDropdown'            => 'header-nav header-nav-dark-dropdown'
			];

		$nav_menu_class = [
				 'Default'      		   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'LanguageDropdown'		   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'BigLogo'				   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'Flat'			           => 'header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'FlatTopBar' 		       => 'header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'FlatTopBarSearch' 	   => 'header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'FlatColoredTopBar'	   => 'header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'LogoNavbarCenter' 	   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'AlwaysSticky' 		   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'BellowSlider' 		   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'FullVideo' 			   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'Transparent' 			   => 'header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse',
				 'SemiTransparent' 		   => 'header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse',
				 'SemiTransparentLight'    => 'header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse',
				 'TransparentBottomBorder' => 'header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse',
				 'NavigationTopLine' 	   => 'header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse',
				 'FullWidth' 		 	   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'Narrow' 				   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'Navbar'				   => 'header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'NavbarExtraInfo'         => 'header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse',
				 'DarkDropdown'            => 'header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse'
			];

			$topbar_class = [
				 'Default'      		   => '',
				 'LanguageDropdown'		   => '',
				 'BigLogo'				   => '',
				 'Flat'			           => '',
				 'FlatTopBar' 		       => 'header-top',
				 'FlatTopBarSearch' 	   => 'header-top',
				 'FlatColoredTopBar'	   => 'header-top header-top-colored header-top-primary',
				 'LogoNavbarCenter' 	   => 'header-top',
				 'AlwaysSticky' 		   => '',
				 'BellowSlider' 		   => '',
				 'FullVideo' 			   => '',
				 'Transparent' 			   => '',
				 'SemiTransparent' 		   => '',
				 'SemiTransparentLight'    => '',
				 'TransparentBottomBorder' => '',
				 'NavigationStripe'        => '',
				 'NavigationTopLine' 	   => '',
				 'FullWidth' 		 	   => '',
				 'Narrow' 				   => '',
				 'Navbar'				   => '',
				 'NavbarExtraInfo'         => 'header-top header-top-style-2',
				 'DarkDropdown'            => ''
			];

			$te = [
				 'Default'      		   => '',
				 'LanguageDropdown'		   => '',
				 'Flat'			           => '',
				 'FlatTopBar' 		       => '',
				 'FlatTopBarSearch' 	   => '',
				 'LogoNavbarCenter' 	   => '',
				 'AlwaysSticky' 		   => '',
				 'BellowSlider' 		   => '',
				 'FullVideo' 			   => '',
				 'Transparent' 			   => '',
				 'SemiTransparent' 		   => '',
				 'SemiTransparentLight'    => '',
				 'TransparentBottomBorder' => '',
				 'NavigationStripe'        => '',
				 'NavigationTopLine' 	   => '',
				 'FullWidth' 		 	   => '',
				 'Narrow' 				   => '',
				 'Navbar'				   => '',
				 'NavbarExtraInfo'         => 'header-top header-top-style-2',
				 'DarkDropdown'            => ''
			];

		$logo_shapes = [
				'default' => [
						'width' => 111,
						'height'=> 54,
						'data-sticky-width' => 82,
						'data-sticky-height'=> 40,
						'data-sticky-top'	=> 33
					],

				'BigLogo' => [
						'width' => 165,
						'height'=> 165,
						'data-sticky-width' => 82,
						'data-sticky-height'=> 82,
						'data-sticky-top'	=> 0
					],
				'transparent' => [
						'width' => 82,
						'height'=> 40,
						'data-sticky-width' => 0,
						'data-sticky-height'=> 0,
						'data-sticky-top'	=> 0
					],
		];

		$options = [];

		switch ($layout) {
			case 'Default':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= true;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = cs_get_option('');
					$options['nav_search'] 	= false;  
					$options['toprow_search'] = true;
					$options['topbar_search'] = false;
					$options['nav_search'] 	  = false;
					$options['nav_social']    = true; 
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'BigLogo':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['BigLogo'];
					$options['toprow'] 		= true;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = true;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = true;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'Flat':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'FlatTopBar':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['topbar_class']	  = $topbar_class[$layout];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = true;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = false;
					$options['topbar_social'] = true;
					$options['toprow_social'] = false;
				break;

			case 'FlatTopBarSearch':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['topbar_class']	  = $topbar_class[$layout];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = true;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = false;
					$options['topbar_search'] = true;
					$options['nav_social']    = false;
					$options['topbar_social'] = true;
					$options['toprow_social'] = false;
				break;

			case 'FlatColoredTopBar':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['topbar_class']	  = $topbar_class[$layout];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = true;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = false;
					$options['topbar_search'] = true;
					$options['nav_social']    = false;
					$options['topbar_social'] = true;
					$options['toprow_social'] = false;
				break;

			case 'LogoNavbarCenter':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['topbar_class'] = $topbar_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['language_dropdown'] = false;
					$options['toprow'] 		= false;
					$options['topbar'] 	    = true;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = false;
					$options['topbar_search'] = true;
					$options['nav_search'] 	  = false;
					$options['nav_social']    = false;
					$options['topbar_social'] = true;
					$options['toprow_social'] = false;

				break;

			case 'BellowSlider':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'FullVideo':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'AlwaysSticky':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= true;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = true;
					$options['topbar_search'] = false;
					$options['nav_search'] 	  = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'Transparent':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['transparent'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;
			case 'SemiTransparent':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['transparent'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

				case 'SemiTransparentLight':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['transparent'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

				case 'TransparentBottomBorder':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['transparent'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'NavigationTopLine':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

			case 'FullWidth':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	  = true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

				case 'Narrow':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['toprow'] 		= false;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;

				

			case 'Navbar':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class'] = $nav_section_class[$layout];
					$options['nav_menu_class']    = $nav_menu_class[$layout];
					$options['logo_shape']   	  = $logo_shapes['default'];
					$options['language_dropdown'] = false;
					$options['toprow'] 		= true;
					$options['topbar'] 	    = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	= false;
					$options['toprow_search'] = true;
					$options['topbar_search'] = false;
					$options['nav_search'] 	  = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;

				break;

			case 'NavbarExtraInfo':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['topbar_class'] = $topbar_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']  = $logo_column[$layout];
					$options['nav_section_class']  = $nav_section_class[$layout];
					$options['nav_menu_class']     = $nav_menu_class[$layout];
					$options['logo_shape']   	   = $logo_shapes['default'];
					$options['toprow'] 		  = false;
					$options['topbar'] 	      = true;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	  = true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = true;
					$options['nav_search'] 	  = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;

				break;

			case 'DarkDropdown':
					$options['layout'] 		 = $layout;
					$options['header_class'] = $header_class[$layout];
					$options['data_plugin_option'] = $data_plugin_options[$layout];
					$options['logo_column']        = $logo_column[$layout];
					$options['nav_section_class']  = $nav_section_class[$layout];
					$options['nav_menu_class']     = $nav_menu_class[$layout];
					$options['logo_shape']   	   = $logo_shapes['default'];
					$options['toprow'] 		  = false;
					$options['topbar'] 	      = false;
					$options['language_dropdown'] = false;
					$options['nav_search'] 	  = true;
					$options['toprow_search'] = false;
					$options['topbar_search'] = false;
					$options['nav_social']    = true;
					$options['topbar_social'] = false;
					$options['toprow_social'] = false;
				break;
		}

		return $options;

	}
}
