<?php

	if(!function_exists('portoFooterOptions'))
	{
		function portoFooterOptions( $layout )
		{
			$footer_class = [
				 'FooterDefault' 	=> '',
				 'FooterAdvance'    => 'short',
				 'FooterSimple'     => 'short',
				 'FooterLatestWork' => 'short',
				 'FooterLight'      => 'light',
				 'FooterLightNarrow'  => 'light narrow',
				 'FooterColorPrimary' => 'color color-primary',
				 'FooterColorQuaternary' => 'color color-quaternary',
				 'FooterColorSecondary'  => 'color color-secondary',
				 'FooterColorTertiary'   => 'color color-tertiary',
				 'FooterContactForm'     => 'short'
			];

		$options = [];
		
		switch ($layout) {
			case 'FooterDefault':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = true;
				break;

			case 'FooterAdvance':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [9,3];
				$options['ribbon'] = false;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;

			case 'FooterSimple':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [8,3,"offset"=>1];
				$options['ribbon'] = false;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;

			case 'FooterLatestWork':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,3,3];
				$options['ribbon'] = false;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;

			case 'FooterLight':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;
			case 'FooterLightNarrow':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [9,3];
				$options['ribbon'] = false;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;

			case 'FooterColorPrimary':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = true;
				break;

			case 'FooterColorQuaternary':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = true;
				break;

			case 'FooterColorSecondary':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = true;
				break;

			case 'FooterColorTertiary':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [3,3,4,2];
				$options['ribbon'] = true;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = true;
				break;
			case 'FooterContactForm':
				$options['layout'] = $layout;
				$options['footer_class'] = $footer_class[$layout];
				$options['grid'] = [5,3,4];
				$options['ribbon'] = false;
				$options['copyright'] = cs_get_option('copyright') ? cs_get_option('copyright') : '© Copyright '.date('Y').'. All Rights Reserved.';
				$options['footer_menu_simple'] = false;
				break;
		}

		return $options;
		}
	}

function cosmos_bottom_sidebar_params($params) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'sidebar-bottom' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count($total_widgets[$sidebar_id]);

        $params[0]['before_widget'] = str_replace('class="', 'class="span' . floor(12 / $sidebar_widgets) . ' ', $params[0]['before_widget']);
    }

    return $params;
}
add_filter('dynamic_sidebar_params','cosmos_bottom_sidebar_params');