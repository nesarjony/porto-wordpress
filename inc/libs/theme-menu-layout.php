<?php

	function portoMainMenu()
	{
		$html = '<li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
														<a class="dropdown-toggle" href="page-login.html">
															<i class="fa fa-user"></i> Cart (1) - $299
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<table class="cart">
																		<tbody>
																			<tr>
																				<td class="product-thumbnail">
																					<a href="shop-product-sidebar.html">
																						<img width="100" height="100" alt="" class="img-responsive" src="'.THEME_ASSETS.'/img/products/product-1.jpg">
																					</a>
																				</td>
																				<td class="product-name">
																					<a href="shop-product-sidebar.html">Photo Camera<br><span class="amount"><strong>$299</strong></span></a>
																				</td>
																				<td class="product-actions">
																					<a title="Remove this item" class="remove" href="#">
																						<i class="fa fa-times"></i>
																					</a>
																				</td>
																			</tr>
																			<tr>
																				<td class="actions" colspan="6">
																					<div class="actions-continue">
																						<button type="submit" class="btn btn-default">View All</button>
																						<button type="submit" class="btn pull-right btn-primary">Proceed to Checkout <i class="fa fa-angle-right ml-xs"></i></button>
																					</div>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</li>
														</ul>
													</li>';
		ob_start();
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
 		$output = ob_get_contents();
 		ob_end_clean();
 		//$output = str_replace("</ul>", $html."</ul>", $output);
		//$output = preg_replace('/<\/ul>$/', $html . '</ul>', $output, 1);
		return $output;

	}