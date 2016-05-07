
<header id="header" <?php echo $options['header_class'] != "" ? " class='".$options['header_class']."'" : "" ?> <?php echo $options['data_plugin_option'] != "" ? "data-plugin-options='".$options['data_plugin_option']."'" : "" ?>>
	<div class="header-body">
		<?php if($layout_type === 'regular'): ?>
				<?php if($options['topbar']  && cs_get_option('topbar_key') ): ?>
				<div class="header-top header-top-color header-top-style-3">
						<div class="container">
							<?php $topbar_layout = cs_get_option('topbar_style'); ?>
							<?php include_once TEMPLATE_DIR.'/headers/template-header-top.php' ; ?>				
						</div>
					</div> 
				<?php endif ?>
				<div class="header-container container">
						<div class="header-row">
							<div <?php echo $options['logo_column'] != "" ? ' class="'.$options['logo_column'].'"' : "" ?>>
								<div class="header-logo">
									<?php portoLogo( $options['logo_shape'] ) ?> 
								</div> 
							</div>

							<div class="header-column">
							<?php if($options['toprow']): ?>
								<div class="header-row">
									<?php 
										if(cs_get_option('search_key') && $options['toprow_search']):
											portoSearch();
										endif 
									?> 
									<?php 
										if(cs_get_option('toprow_menu_key')):
											portoTopRowMenu();
										endif 
									?>
								</div>
							<?php endif ?>
								<div class="header-row">
									<div <?php echo $options['nav_section_class'] != "" ? ' class="'.$options['nav_section_class'].'"': "" ?>>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i> 
										</button>
										<?php 
											if($options['nav_social'] && cs_get_option('social_key')):
												portoSocialMedia();
												endif 
											?>
										<div <?php echo $options['nav_menu_class'] != "" ? ' class="'.$options['nav_menu_class'].'"' : "" ?>>
											<?php echo portoMainMenu() ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		<?php else: ?>
			<?php if($options['topbar']  && cs_get_option('topbar_key') ): ?>
				<div class="header-top header-top-color header-top-style-3">
						<div class="container">
							<?php $topbar_layout = cs_get_option('topbar_style'); ?>
							<?php include_once TEMPLATE_DIR.'/headers/template-header-top.php' ; ?>				
						</div>
					</div>
				<?php endif ?>

				<div class="header-container container">
						<div class="header-row">
							<div <?php echo $options['logo_column'] != "" ? ' class="'.$options['logo_column'].'"' : "" ?>>
								<div class="header-logo">
									<?php portoLogo( $options['logo_shape'] ) ?>
								</div>
							</div>
					<?php if($options['layout'] === 'LogoNavbarCenter'): ?>
						</div>
					</div>
					<?php endif ?>					
							<div class="header-column">
							
								<?php if($options['layout'] !== 'NavbarExtraInfo'): ?>
								<?php if($options['toprow']): ?>
								<div class="row">
									<?php 
										if(cs_get_option('toprow_menu_key')): 
											portoTopRowMenu();
										endif
									?>
								</div>
								<div class="row mb-md">
									<?php 
										if(cs_get_option('search_key')):
											portoSearch();
										endif 
									?>
								</div>
							<?php endif ?>
							<?php else: ?>
								<ul class="header-extra-info hidden-xs">
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">(800) 123-4567</h4>
												<p><small>Get in touch with us</small></p>
											</div>
										</div>
									</li>
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">mail@example.com</h4>
												<p><small>Send us an e-mail</small></p>
											</div>
										</div>
									</li>
								</ul>
							<?php endif ?>
							</div>
						<?php if($options['layout'] !== 'LogoNavbarCenter'): ?>
							
						</div>
					</div>
				<?php endif ?>
					<div <?php echo $options['nav_section_class'] != "" ? ' class="'.$options['nav_section_class'].'"': "" ?>>
						<?php if($options['layout'] !== 'LogoNavbarCenter'): ?>	
						<div class="container">
						<?php endif ?>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<?php 
							if($options['nav_social'] && cs_get_option('social_key')):
								portoSocialMedia();
								endif 
							?>
							<div <?php echo $options['nav_menu_class'] != "" ? ' class="'.$options['nav_menu_class'].'"' : "" ?>>
								<?php echo portoMainMenu() ?>
							</div>
						<?php if($options['layout'] !== 'LogoNavbarCenter'): ?>	
						</div>
						<?php endif ?>
					</div>
		<?php endif ?>				
	</div>
<!-- End  header body-->
</header>