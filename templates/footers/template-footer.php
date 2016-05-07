
				<div class="container">
					<div class="row">
						<?php if($options['ribbon']): ?>
						<div class="footer-ribbon">
							<span><?php echo cs_get_option('ribbon_text') ? cs_get_option('ribbon_text') : 'Get In Touch!' ?></span>
						</div>
						<?php endif ?>
						<?php $grid = $options['grid']; ?>
						<?php $enable_offset = isset($grid['offset']) ? count($grid)-2:'' ?>
						<?php $count = isset($grid['offset']) ? count($grid)-1 : count($grid); ?>
						<?php for($i=0;$i<$count;$i++): ?>
						<div class="col-md-<?php echo $grid[$i] ?><?php echo $enable_offset && $i == $enable_offset ? ' col-md-offset-'.$grid['offset']:''?>">
							
						</div>
						<?php endfor ?>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<?php $image =  wp_get_attachment_image_src(cs_get_option('footer_logo'),'full'); ?>
								<a href="#" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="<?php echo $image[0] ?>">
								</a>
							</div>
							<div class="col-md-<?php echo $options['footer_menu_simple'] ? '7':'11'?>">
								<p><?php echo $options['copyright'] ?></p>
							</div>
							<?php if($options['footer_menu_simple']): ?>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
							<?php endif?>
						</div>
					</div>
				</div>