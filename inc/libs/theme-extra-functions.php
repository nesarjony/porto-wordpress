<?php

		function portoHeaderLayouts()
		{	
			$layouts = [
				 'Default','Big Logo','Flat','Flat Top Bar','Logo Navbar Center','Bellow Slider','Transparent','Semi Transparent','Semi Transparent Light','Transparent Bottom Border','Full Width','Narrow','Navbar','Navbar Extra Info','Dark Dropdown'
			];
			// $layouts = [
			// 	 'Language Dropdown','Flat Top Bar Search','Flat Colored Top Bar''Always Sticky','Full Video','Semi Transparent Light','Transparent Bottom Border','Navigation Top Line','Dark Dropdown'
			// ];
			$style = [];
			foreach($layouts as $layout)
			{
				$key = !strpos($layout," ") ? $layout : str_replace(" ","", $layout);
				$style[$key] = ADMIN_URI."/layout/headers/".$layout.".png";
			}

			return $style; 
		} 

		function portoSkinLayoutGenerate()
		{
			$skinArray = array();

			$skinArray["default"] = ADMIN_URI."/layout/skin/default.png";

			for($i=2;$i <= 8;$i++)
			{
				$skinArray["skin".$i] = ADMIN_URI."/layout/skin/Skin ".$i.".png";
			}
	        $skinArray['custom'] = ADMIN_URI."/layout/skin/custom.png";
			return $skinArray;
		} 

		function portoTopbarLayouts()
		{
			$layouts = array();

			for($i=1;$i<=7;$i++)
			{
				$layouts['Topbar'.$i] = ADMIN_URI."/layout/topbars/Topbar".$i.".png";
			}
			
			return $layouts;
		}

     

		function portoFooterLayouts()
		{	
			$layouts = [
				 'FooterDefault','FooterAdvance','FooterSimple','FooterLatestWork','FooterLight','FooterLightNarrow','FooterColorPrimary','FooterColorQuaternary','FooterColorSecondary','FooterColorTertiary','FooterContactForm'
			];
			$style = [];
			foreach($layouts as $layout)
			{
				$key = !strpos($layout," ") ? $layout : str_replace(" ","", $layout);
				$style[$key] = ADMIN_URI."/layout/footers/".$layout.".png";
			}

			return $style;
		}

	  function portoBreadcrumbsLayout()
		{	
			$layouts = [
				 'default','colorPrimary','colorSecondary','colorQuarternary','colorTertiary','customBackground','parallaxHeader','pageHeaderLight','pageHeaderLightReverse','pageHeaderCenter'
			];
			$style = [];
			foreach($layouts as $layout)
			{
				$key = !strpos($layout," ") ? $layout : str_replace(" ","", $layout);
				$key = ucfirst($key);
				$style[$key] = ADMIN_URI."/layout/page_headers/".$layout.".png";
			}

			return $style;
		}

	 function get_registerd_sidebars()
	 {
	 	global $wp_registered_sidebars;

	 }

	 function excerptLengthGenerator()
	 {
	 	$length = [];
	 	for($i=20;$i<=60;$i++)
	 	{
	 		$length[] = $i;
	 	}
	 	return $length;
	 }

	 function postsPerPageGenerate()
	 {
	 	$count = [];
	 	for($i=2;$i<=20;$i++)
	 	{
	 		$count[] = $i;
	 	}
	 	return $count;
	 }