<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 4.3.1</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<?php wp_head() ?>

	</head>
	<body>
		<div class="body">
			<?php
				$layout = cs_get_option('header_style');

				$options = portoHeaderOptions( $layout );
				//var_dump($options);
				//echo $layout_option['header_class'];
				$regularLayouts = [
				 'Default',"BigLogo",'Flat','FlatTopBar','AlwaysSticky','BellowSlider','FullVideo','Transparent','SemiTransparent','SemiTransparentLight','TransparentBottomBorder','NavigationTopLine','FullWidth','Narrow','DarkDropdown'
				]; 
				if(in_array($layout, $regularLayouts)){
					$layout_type = 'regular';
				}else{
					$layout_type = 'seperate_nav';
				}
				include_once TEMPLATE_DIR . '/headers/template-header.php';
		 		//get_template_part('templates/headers/header','simple'); 
?>



		