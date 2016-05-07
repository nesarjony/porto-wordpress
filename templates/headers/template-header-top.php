<?php
	if($topbar_layout == 'topbar_1'): ?>
		<nav class="header-nav-top pull-right">
			<ul class="nav nav-pills">
				<?php if(cs_get_option('topbar_phone')): ?> 
				<li class="hidden-xs">
					<span class="ws-nowrap"><i class="fa fa-phone"></i><?= cs_get_option('topbar_phone') ?></span>
				</li>
				<?php endif ?>
				<?php 
					if(cs_get_option('wpml_key')):
						 echo language_dropdown();
					endif
				?>

				<?php 
 
					if(cs_get_option('topbar_page')):
						$id = cs_get_option('topbar_page');
						$page = get_post($id);

					?>
					<li class="hidden-xs">
						<a href="<?php echo get_permalink($id) ?>"><i class="fa fa-angle-right"></i> <?php echo $page->post_title ?> </a>
					</li>
					<?php endif ?>
			</ul>
		</nav>
	<?php elseif($topbar_layout == 'topbar_2' || $topbar_layout == 'topbar_3' ): ?>

		<?php 


			if(cs_get_option('social_key') && $options['topbar_social'] && $topbar_layout == 'topbar_2'){
				portoSocialMedia( true );
			} 

			if(cs_get_option('search_key') && $options['topbar_search'] && $topbar_layout == 'topbar_3'){
				portoSearch();
			}
			
			if(cs_get_option('topbar_phone')):
				?>
				<p class="pull-right text-color-light">
					<span class="mr-xs"><i class="icon-call-end icons mr-xs"></i><?= cs_get_option('topbar_phone') ?></span><span class="hidden-xs"></span>
				</p>
			<?php endif ?>

	<?php elseif($topbar_layout == 'topbar_4' ): ?>
			<?php 
				portoTopbarInfo()
			?>
			
			<?php 
				if(cs_get_option('social_key') && $options['topbar_social']){
					portoSocialMedia();
				} 
			?>

	<?php elseif($topbar_layout == 'topbar_5' ): ?>
			<?php if(cs_get_option('topbar_slogan_big')): ?>
				<p class="pull-left hidden-xs"><?php echo cs_get_option('topbar_slogan_big') ?></p>
			<?php endif ?>
			
			<?php if(cs_get_option('topbar_location')): ?>
				<p class="pull-right"><i class="fa fa-map-marker"></i><?php echo cs_get_option('topbar_location') ?></p>
			<?php endif  ?>

	<?php elseif($topbar_layout == 'topbar_6' ): ?>

			<?php 
				portoTopbarInfo()
			?>

		<?php 
			if(cs_get_option('search_key') && $options['topbar_search']){
				portoSearch();
			}
		?>

    <?php endif ?>