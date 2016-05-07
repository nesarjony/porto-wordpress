<?php

	function portoSkinLayoutGenerate()
	{
		$skin = array('default');
		$skinArray = array();

		$skinArray["default"] = ADMIN_URI."/layout/skin/default.png";

		for($i=2;$i <= 8;$i++)
		{
			$skinArray["skin".$i] = ADMIN_URI."/layout/skin/Skin ".$i.".png";
		}
		return $skinArray;
	} 

    function portoLogoShapeGeneateDefault( $layout,$key )
    {
        $logo_shapes = [
                'default' => [
                        'width' => 111,
                        'height'=> 54,
                        'data-sticky-width' => 82,
                        'data-sticky-height'=> 40,
                        'data-sticky-top'   => 33
                    ],

                'BigLogo' => [
                        'width' => 165,
                        'height'=> 165,
                        'data-sticky-width' => 82,
                        'data-sticky-height'=> 82,
                        'data-sticky-top'   => 0
                    ],
                'transparent' => [
                        'width' => 82,
                        'height'=> 40,
                        'data-sticky-width' => 0,
                        'data-sticky-height'=> 0,
                        'data-sticky-top'   => 0
                    ],
        ];
        switch ($layout) {
            case 'Default':
                    $logo_shape  = $logo_shapes['default']; 
                break;
            case 'BigLogo':
                    $logo_shape  = $logo_shapes['BigLogo'];
                break;

            case 'Flat':
                    $logo_shape  = $logo_shapes['default'];
                break;

            case 'FlatTopBar':
                    $logo_shape  = $logo_shapes['default'];
                break;

            case 'LogoNavbarCenter':
                    $logo_shape        = $logo_shapes['default'];

                break;

            case 'BellowSlider':
                    $logo_shape        = $logo_shapes['default'];
                break;

            case 'Transparent':
                    $logo_shape        = $logo_shapes['transparent'];
                break;

            case 'SemiTransparent':
                    $logo_shape        = $logo_shapes['transparent'];
                break;

            case 'SemiTransparentLight':
                    $logo_shape        = $logo_shapes['transparent'];
                break;

            case 'TransparentBottomBorder':
                    $logo_shape        = $logo_shapes['transparent'];
                break;

            case 'NavigationTopLine':
                    $logo_shape        = $logo_shapes['default'];
                break;

            case 'FullWidth':
                    $logo_shape        = $logo_shapes['default'];
                break;

             case 'Narrow':
                    $logo_shape        = $logo_shapes['default'];
                break;              

            case 'Navbar':
                    $logo_shape        = $logo_shapes['default'];

                break;
 
            case 'NavbarExtraInfo':
                    $logo_shape         = $logo_shapes['default'];         
                break;

            case 'DarkDropdown':                    
                    $logo_shape         = $logo_shapes['default'];
                   
                break;
        }
        //echo $logo_shape[$key] . "<br/>";
        return $logo_shape[$key];
    }

    function portoTopbarGenerateDefault( $layout )
    {
        $topbar = [
            'FlatTopBar' => 'topbar_4',
            'LogoNavbarCenter' => 'topbar_6',
            'NavbarExtraInfo' => 'topbar_5'
        ]; 
        return $topbar[$layout];
    }

    function portoSkinGeneateDefault( $skin,$argument=false )
    { 
    	$skinOptions = [];

    	switch( $skin )  
    	{
    		case 'default': 
    			$skinOptions['primary'] = "#0088cc";
    			$skinOptions['a_hover'] = "#0099e6";
    			$skinOptions['a_focus'] = "#0099e6";
    			$skinOptions['a_active'] = "#0077b3";
    			$skinOptions['secondary'] = "#e36159";
    			$skinOptions['tertiary'] = "#2baab1";
    			$skinOptions['quaternary'] = "#383f48";
    			$skinOptions['border_bottom_color'] = "#006699";
    			$skinOptions['border_radius'] = true;
    			break;

    		case 'Skin2':
    			$skinOptions['primary'] = "#89b837";
    			$skinOptions['a_hover'] = "#96c742";
    			$skinOptions['a_focus'] = "#96c742";
    			$skinOptions['a_active'] = "#7aa431";
    			$skinOptions['secondary'] = "#78a330";
    			$skinOptions['tertiary'] = "#dfe5ea";
    			$skinOptions['quaternary'] = "#444444";
    			$skinOptions['border_bottom_color'] = "#4f6920";
    			$skinOptions['border_radius'] = false;
    			break;

    		case 'Skin3': 
    			$skinOptions['primary'] = "#ed8446";
    			$skinOptions['a_hover'] = "#426373"; 
    			$skinOptions['a_focus'] = "#426373";
    			$skinOptions['a_active'] = "#304753";
    			$skinOptions['secondary'] = "#e6f0f2";
    			$skinOptions['tertiary'] = "#f1f6f9";
    			$skinOptions['quaternary'] = "#395563";
    			$skinOptions['border_bottom_color'] = "#141d22";
    			$skinOptions['border_radius'] = false;
    			break;

    		case 'Skin4': 
    			$skinOptions['primary'] = "#395563";
    			$skinOptions['a_hover'] = "#96c9dc"; 
    			$skinOptions['a_focus'] = "#96c9dc";
    			$skinOptions['a_active'] = "#70b5d0";
    			$skinOptions['secondary'] = "#484a51";
    			$skinOptions['tertiary'] = "#2baab1";
    			$skinOptions['quaternary'] = "#383f48";
    			$skinOptions['border_bottom_color'] = "#3c95b7";
    			$skinOptions['border_radius'] = false;
    			break;
    		case 'Skin5': 
    			$skinOptions['primary'] = "#83bfd6";
    			$skinOptions['a_hover'] = "#ef935d"; 
    			$skinOptions['a_focus'] = "#ef935d";
    			$skinOptions['a_active'] = "#ef935d";
    			$skinOptions['secondary'] = "#78a330";
    			$skinOptions['tertiary'] = "#dfe5ea";
    			$skinOptions['quaternary'] = "#444444";
    			$skinOptions['border_bottom_color'] = "#4f6920";
    			$skinOptions['border_radius'] = false;
    			break;
    		case 'Skin6': 
    			$skinOptions['primary'] = "#5974a3";
    			$skinOptions['a_hover'] = "#6982ad"; 
    			$skinOptions['a_focus'] = "#6982ad";
    			$skinOptions['a_active'] = "#506893";
    			$skinOptions['secondary'] = "#57a6b0";
    			$skinOptions['tertiary'] = "#84c0d8";
    			$skinOptions['quaternary'] = "#bbbbbb";
    			$skinOptions['border_bottom_color'] = "#354561";
    			$skinOptions['border_radius'] = false;
    			break;
    		case 'Skin7':
    			$skinOptions['primary'] = "#2aafea";
    			$skinOptions['a_hover'] = "#41b8ec"; 
    			$skinOptions['a_focus'] = "#41b8ec";
    			$skinOptions['a_active'] = "#16a5e4";
    			$skinOptions['secondary'] = "#ff7347";
    			$skinOptions['tertiary'] = "#3a3a3a";
    			$skinOptions['quaternary'] = "#cccccc";
    			$skinOptions['border_bottom_color'] = "#1494cd";
    			$skinOptions['border_radius'] = true;
    			break;
    		case 'Skin8':
    			$skinOptions['primary'] = "#f45c57";
    			$skinOptions['a_hover'] = "#f6736f"; 
    			$skinOptions['a_focus'] = "#f6736f";
    			$skinOptions['a_active'] = "#f2453f";
    			$skinOptions['secondary'] = "#cd3530";
    			$skinOptions['tertiary'] = "#2082c1";
    			$skinOptions['quaternary'] = "#343434";
    			$skinOptions['border_bottom_color'] = "#d7140e";
    			$skinOptions['border_radius'] = true;
                $skinOptions['topbar_bg'] = '#343434';
                $skinOptions['topbar_border'] = '#272727';
                $skinOptions['topbar_a_hover'] = '#414141';
                break;
    	}
        //var_dump($skinOptions); 
        //echo $skinOptions["primary"];
         if( $argument) return $skinOptions[$argument];
         else return $skinOptions;
  	
    }