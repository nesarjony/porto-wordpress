<?php
/**
* 
*/
if(!class_exists('portoMenuFields'))
{
	class portoMenuFields
	{
		function __construct()
		{

			// Add Menu Custom fields
			add_filter( 'wp_setup_nav_menu_item', array( $this, 'portoMenuFieldsSetup' ) );

			// Update Menu Custom fields
			add_action( 'wp_update_nav_menu_item',array( $this, 'portoMenuFieldsUpdate' ),100,3 )
			;
			// Menu Fields Edit
			add_filter( 'wp_edit_nav_menu_walker',array( $this, 'portoEditNavMenuWalker' ),100,2 );
		}

		public function portoMenuFieldsSetup( $menu_item )
		{
			$menu_item->fow_icon     = get_post_meta( $menu_item->ID, 'menu-item-fow-icon',true );
			$menu_item->bg_color     = get_post_meta( $menu_item->ID, 'menu-item-bg-color',true );
			$menu_item->text_color   = get_post_meta( $menu_item->ID, 'menu-item-text-color',true );
			$menu_item->megamenu     = get_post_meta( $menu_item->ID, 'menu-item-megamenu',true );
			$menu_item->megaemenu_bg = get_post_meta( $menu_item->ID, 'menu-item-megamenu-bg',true );
			return $menu_item;
		}

		public function portoMenuFieldsUpdate( $menu_id, $menu_item_db_id, $menu_item_data)
		{
			if(!isset($_POST['edit-menu-item-fow-icon'][$menu_item_db_id]))
			{
				$_POST['edit-menu-item-fow-icon'][$menu_item_db_id] = "";
			}
			$fow_icon = $_POST['edit-menu-item-fow-icon'][$menu_item_db_id];
			update_post_meta( $menu_item_db_id,'menu-item-fow-icon',$fow_icon);

			if(!isset($_POST['edit-menu-item-bg-color'][$menu_item_db_id]))
			{
				$_POST['edit-menu-item-bg-color'][$menu_item_db_id] = "";
			}
			$bg_color = $_POST['edit-menu-item-bg-color'][$menu_item_db_id];

			update_post_meta( $menu_item_db_id,'menu-item-bg-color',$fow_icon);

			if(!isset($_POST['edit-menu-item-text-color'][$menu_item_db_id]))
			{
				$_POST['edit-menu-item-text-color'][$menu_item_db_id] = "";
			}
			$text_color = $_POST['edit-menu-item-text-color'][$menu_item_db_id];

			update_post_meta( $menu_item_db_id,'menu-item-text-color',$text_color);

			if(!isset($_POST['edit-menu-item-megamenu'][$menu_item_db_id]))
			{
				$_POST['edit-menu-item-megamenu'][$menu_item_db_id] = "";
			}
			$megamenu = $_POST['edit-menu-item-megamenu'][$menu_item_db_id];

			update_post_meta( $menu_item_db_id,'menu-item-megamenu',$megamenu);

			if(!isset($_POST['edit-menu-item-megamenu-bg'][$menu_item_db_id]))
			{
				$_POST['edit-menu-item-megamenu-bg'][$menu_item_db_id] = "";
			}
			$megamenu_bg = $_POST['edit-menu-item-megamenu-bg'][$menu_item_db_id];

			update_post_meta( $menu_item_db_id,'menu-item-megamenu-bg',$megamenu_bg);
		}

		public function portoEditNavMenuWalker($walker,$menu_id)
		{
			return 'porto_Walker_Nav_Menu_Edit';
		}

	}
}

new portoMenuFields();


if(!class_exists('porto_Walker_Nav_Menu_Edit')):
	class porto_Walker_Nav_Menu_Edit extends Walker_Nav_Menu {
	/**
	 * Starts the list before the elements are added.
	 *
	 * @see Walker_Nav_Menu::start_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   Not used.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see Walker_Nav_Menu::end_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   Not used.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {}

	/**
	 * Start the element output.
	 *
	 * @see Walker_Nav_Menu::start_el()
	 * @since 3.0.0
	 *
	 * @global int $_wp_nav_menu_max_depth
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   Not used.
	 * @param int    $id     Not used.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $_wp_nav_menu_max_depth;
		$_wp_nav_menu_max_depth = $depth > $_wp_nav_menu_max_depth ? $depth : $_wp_nav_menu_max_depth;

		ob_start();
		$item_id = esc_attr( $item->ID );
		$removed_args = array(
			'action',
			'customlink-tab',
			'edit-menu-item',
			'menu-item',
			'page-tab',
			'_wpnonce',
		);

		$original_title = '';
		if ( 'taxonomy' == $item->type ) {
			$original_title = get_term_field( 'name', $item->object_id, $item->object, 'raw' );
			if ( is_wp_error( $original_title ) )
				$original_title = false;
		} elseif ( 'post_type' == $item->type ) {
			$original_object = get_post( $item->object_id );
			$original_title = get_the_title( $original_object->ID );
		} elseif ( 'post_type_archive' == $item->type ) {
			$original_object = get_post_type_object( $item->object );
			$original_title = $original_object->labels->archives;
		}

		$classes = array(
			'menu-item menu-item-depth-' . $depth,
			'menu-item-' . esc_attr( $item->object ),
			'menu-item-edit-' . ( ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? 'active' : 'inactive'),
		);

		$title = $item->title;

		if ( ! empty( $item->_invalid ) ) {
			$classes[] = 'menu-item-invalid';
			/* translators: %s: title of menu item which is invalid */
			$title = sprintf( __( '%s (Invalid)' ), $item->title );
		} elseif ( isset( $item->post_status ) && 'draft' == $item->post_status ) {
			$classes[] = 'pending';
			/* translators: %s: title of menu item in draft status */
			$title = sprintf( __('%s (Pending)'), $item->title );
		}

		$title = ( ! isset( $item->label ) || '' == $item->label ) ? $title : $item->label;

		$submenu_text = '';
		if ( 0 == $depth )
			$submenu_text = 'style="display: none;"';

		?>
		<li id="menu-item-<?php echo $item_id; ?>" class="<?php echo implode(' ', $classes ); ?>">
			<div class="menu-item-bar">
				<div class="menu-item-handle">
					<span class="item-title"><span class="menu-item-title"><?php echo esc_html( $title ); ?></span> <span class="is-submenu" <?php echo $submenu_text; ?>><?php _e( 'sub item' ); ?></span></span>
					<span class="item-controls">
						<span class="item-type"><?php echo esc_html( $item->type_label ); ?></span>
						<span class="item-order hide-if-js">
							<a href="<?php
								echo wp_nonce_url(
									add_query_arg(
										array(
											'action' => 'move-up-menu-item',
											'menu-item' => $item_id,
										),
										remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
									),
									'move-menu_item'
								);
							?>" class="item-move-up"><abbr title="<?php esc_attr_e('Move up'); ?>">&#8593;</abbr></a>
							|
							<a href="<?php
								echo wp_nonce_url(
									add_query_arg(
										array(
											'action' => 'move-down-menu-item',
											'menu-item' => $item_id,
										),
										remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
									),
									'move-menu_item'
								);
							?>" class="item-move-down"><abbr title="<?php esc_attr_e('Move down'); ?>">&#8595;</abbr></a>
						</span>
						<a class="item-edit" id="edit-<?php echo $item_id; ?>" title="<?php esc_attr_e('Edit Menu Item'); ?>" href="<?php
							echo ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? admin_url( 'nav-menus.php' ) : add_query_arg( 'edit-menu-item', $item_id, remove_query_arg( $removed_args, admin_url( 'nav-menus.php#menu-item-settings-' . $item_id ) ) );
						?>"><?php _e( 'Edit Menu Item' ); ?></a>
					</span>
				</div>
			</div>

			<div class="menu-item-settings" id="menu-item-settings-<?php echo $item_id; ?>">
				<?php if ( 'custom' == $item->type ) : ?>
					<p class="field-url description description-wide">
						<label for="edit-menu-item-url-<?php echo $item_id; ?>">
							<?php _e( 'URL' ); ?><br />
							<input type="text" id="edit-menu-item-url-<?php echo $item_id; ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->url ); ?>" />
						</label>
					</p>
				<?php endif; ?>
				<p class="description description-wide">
					<label for="edit-menu-item-title-<?php echo $item_id; ?>">
						<?php _e( 'Navigation Label' ); ?><br />
						<input type="text" id="edit-menu-item-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->title ); ?>" />
					</label>
				</p>
				<p class="field-title-attribute description description-wide">
					<label for="edit-menu-item-attr-title-<?php echo $item_id; ?>">
						<?php _e( 'Title Attribute' ); ?><br />
						<input type="text" id="edit-menu-item-attr-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->post_excerpt ); ?>" />
					</label>
				</p>
				<p class="field-link-target description">
					<label for="edit-menu-item-target-<?php echo $item_id; ?>">
						<input type="checkbox" id="edit-menu-item-target-<?php echo $item_id; ?>" value="_blank" name="menu-item-target[<?php echo $item_id; ?>]"<?php checked( $item->target, '_blank' ); ?> />
						<?php _e( 'Open link in a new tab' ); ?>
					</label>
				</p>
				<p class="field-css-classes description description-thin">
					<label for="edit-menu-item-classes-<?php echo $item_id; ?>">
						<?php _e( 'CSS Classes (optional)' ); ?><br />
						<input type="text" id="edit-menu-item-classes-<?php echo $item_id; ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo $item_id; ?>]" value="<?php echo esc_attr( implode(' ', $item->classes ) ); ?>" />
					</label>
				</p>
				<p class="field-xfn description description-thin">
					<label for="edit-menu-item-xfn-<?php echo $item_id; ?>">
						<?php _e( 'Link Relationship (XFN)' ); ?><br />
						<input type="text" id="edit-menu-item-xfn-<?php echo $item_id; ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->xfn ); ?>" />
					</label>
				</p> 
 
				<!-- Custom Menu Fields -->
				<p class="description description-wide">
					<label for="edit-menu-item-fow-icon-<?php echo $item_id; ?>">
						<?php _e( 'Font Awesome Icon Class','porto'); ?><br />
						<?php
							$icon = get_post_meta( $item_id,'menu-item-fow-icon',true );
						?>
						<input type="text" id="edit-menu-item-fow-icon-<?php echo $item_id; ?>" class="widefat edit-menu-item-fow-icon" name="edit-menu-item-fow-icon[<?php echo $item_id; ?>]" value="<?php echo $icon ?>" />
						<?php echo __('Input font awesome icon or icon class. You can see <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Font Awesome Icons in here</a>.', 'porto') ?></span>
					</label>
				</p>

				<p class="description description-wide">
					<label for="edit-menu-item-bg-color-<?php echo $item_id; ?>">
						<?php _e( 'Background Color','porto'); ?><br />
						<?php
							$bgcolor = get_post_meta( $item_id,'menu-item-bg-color',true );
						?>
						<input type="text" id="edit-menu-item-bg-color-<?php echo $item_id; ?>" class="widefat edit-menu-item-bg-color" name="edit-menu-item-bg-color[<?php echo $item_id; ?>]" value="<?php echo $bgcolor; ?>" />
						<?php echo __('Input Menu Item Background color On Html format', 'porto') ?></span>
					</label>
				</p>

				<p class="description description-wide">
					<label for="edit-menu-item-text-color-<?php echo $item_id; ?>">
						<?php _e( 'Text Color','porto'); ?><br />
						<?php
							$textcolor = get_post_meta( $item_id,'menu-item-text-color',true );
						?>
						<input type="text" id="edit-menu-item-text-color-<?php echo $item_id; ?>" class="widefat edit-menu-item-text-color" name="edit-menu-item-text-color[<?php echo $item_id; ?>]" value="<?php echo $textcolor; ?>" />
						<?php echo __('Input Menu Item Text color On Html format', 'porto') ?></span>
					</label>
				</p>
				
				<p class="description description-wide">
					<?php 
	                     $value = get_post_meta( $item_id, 'menu-item-megamenu', true);
	                     if( $value != "" ) $value = "checked='checked'";
	                ?>
	                <label for="edit-menu-item-megamenu-<?php echo $item_id; ?>">
	                     <?php _e( 'Mega Menu','porto' ); ?><br/>
	                     <input type="checkbox" value="enabled" id="edit-menu-item-megamenu-<?php echo $item_id; ?>" name="edit-menu-item-megamenu[<?php echo $item_id; ?>]" <?php echo $value; ?> />
	                      <?php _e( 'Activate Mega Menu','porto' ); ?>
	                 </label>
				</p>

				<p class="description description-wide">
					<label for="edit-menu-item-megamenu-bg-<?php echo $item_id; ?>"> 
						<?php _e( 'Megamenu Background Image Url','porto'); ?><br />
						<?php
							$megamenubg = get_post_meta( $item_id,'menu-item-megamenu-bg',true );
						?>
						<input type="text" id="edit-menu-item-megamenu-bg-<?php echo $item_id; ?>" class="widefat edit-menu-item-megamenu-bg" name="edit-menu-item-megamenu-bg[<?php echo $item_id; ?>]" value="<?php echo $megamenubg; ?>" />
					</label> 
				</p>

				<!-- End Menu Custom fields -->
				
				<p class="field-description description description-wide">
					<label for="edit-menu-item-description-<?php echo $item_id; ?>">
						<?php _e( 'Description' ); ?><br />
						<textarea id="edit-menu-item-description-<?php echo $item_id; ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo $item_id; ?>]"><?php echo esc_html( $item->description ); // textarea_escaped ?></textarea>
						<span class="description"><?php _e('The description will be displayed in the menu if the current theme supports it.'); ?></span>
					</label>
				</p>

				<p class="field-move hide-if-no-js description description-wide">
					<label>
						<span><?php _e( 'Move' ); ?></span>
						<a href="#" class="menus-move menus-move-up" data-dir="up"><?php _e( 'Up one' ); ?></a>
						<a href="#" class="menus-move menus-move-down" data-dir="down"><?php _e( 'Down one' ); ?></a>
						<a href="#" class="menus-move menus-move-left" data-dir="left"></a>
						<a href="#" class="menus-move menus-move-right" data-dir="right"></a>
						<a href="#" class="menus-move menus-move-top" data-dir="top"><?php _e( 'To the top' ); ?></a>
					</label>
				</p>

				<div class="menu-item-actions description-wide submitbox">
					<?php if ( 'custom' != $item->type && $original_title !== false ) : ?>
						<p class="link-to-original">
							<?php printf( __('Original: %s'), '<a href="' . esc_attr( $item->url ) . '">' . esc_html( $original_title ) . '</a>' ); ?>
						</p>
					<?php endif; ?>
					<a class="item-delete submitdelete deletion" id="delete-<?php echo $item_id; ?>" href="<?php
					echo wp_nonce_url(
						add_query_arg(
							array(
								'action' => 'delete-menu-item',
								'menu-item' => $item_id,
							),
							admin_url( 'nav-menus.php' )
						),
						'delete-menu_item_' . $item_id
					); ?>"><?php _e( 'Remove' ); ?></a> <span class="meta-sep hide-if-no-js"> | </span> <a class="item-cancel submitcancel hide-if-no-js" id="cancel-<?php echo $item_id; ?>" href="<?php echo esc_url( add_query_arg( array( 'edit-menu-item' => $item_id, 'cancel' => time() ), admin_url( 'nav-menus.php' ) ) );
						?>#menu-item-settings-<?php echo $item_id; ?>"><?php _e('Cancel'); ?></a>
				</div>

				<input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $item_id; ?>]" value="<?php echo $item_id; ?>" />
				<input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object_id ); ?>" />
				<input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object ); ?>" />
				<input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_item_parent ); ?>" />
				<input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_order ); ?>" />
				<input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->type ); ?>" />
			</div><!-- .menu-item-settings-->
			<ul class="menu-item-transport"></ul>
		<?php
		$output .= ob_get_clean();
	}

} // Walker_Nav_Menu_Edit

endif;

if(!class_exists('portoMainMenuWalker')):

	class portoMainMenuWalker extends Walker_Nav_Menu {

		public $has_megamenu  = false;
		public $has_children  = false;
		public $cols          = 0;
		public $rows		  = 0;
		/**
		 * What the class handles.
		 *
		 * @see Walker::$tree_type 
		 * @since 3.0.0
		 * @var string
		 */
		public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

		/**
		 * Database fields to use.
		 * 
		 * @see Walker::$db_fields
		 * @since 3.0.0
		 * @todo Decouple this.
		 * @var array
		 */
		public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

		/**
		 * Starts the list before the elements are added.
		 *
		 * @see Walker::start_lvl()
		 *
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param int    $depth  Depth of menu item. Used for padding.
		 * @param array  $args   An array of arguments. @see wp_nav_menu()
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			
			$wrap_top = "";
			if( $this->has_megamenu && $this->has_children )
			{
				$wrap_top .= "<li>\n";
				$wrap_top .= $indent.'<div class="dropdown-mega-content">';
				$wrap_top .= $indent.'<div class="row">';
				$wrap_top .= $indent.'<div class="col-md-3">';										
			}

			$output .= "\n$indent $wrap_top<ul class=\"sub-menu%ul_class%\">\n";

		}

		/**
		 * Ends the list of after the elements are added.
		 *
		 * @see Walker::end_lvl()
		 *
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param int    $depth  Depth of menu item. Used for padding.
		 * @param array  $args   An array of arguments. @see wp_nav_menu()
		 */
		public function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$out_div = "";
			if( $this->has_megamenu && $this->has_children )
			{
				$out_div .= "</li>\n";
				$out_div .= $indent.'</div>';
				$out_div .= $indent.'</div>';
				$out_div .= $indent.'</div>';										
			}
			$output .= "$indent</ul>$out_div\n";
			
		} 

		/**
		 * Start the element output.
		 *
		 * @see Walker::start_el()
		 *
		 * @since 3.0.0
		 * @since 4.4.0 'nav_menu_item_args' filter was added.
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param object $item   Menu item data object.
		 * @param int    $depth  Depth of menu item. Used for padding.
		 * @param array  $args   An array of arguments. @see wp_nav_menu()
		 * @param int    $id     Current item ID.
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			if( $args->walker->has_children ) $this->has_children = true;

			if( !empty($item->fow_icon) ) $this->fow_icon     = $item->fow_icon;
			if( !empty($item->bg_color) ) $this->bg_color     = $item->bg_color;
			if( !empty($item->text_color) ) $this->text_color = $item->text_color;

			if( $item->megamenu === "enabled" ) 
				$this->has_megamenu = true; 
			else
				$this->has_megamenu = false;

			$ul_class = '';
			if( !$this->has_megamenu )
			{
				$ul_class .= "  dropdown-menu";
			}else{
				$ul_class .= " dropdown-mega-sub-nav";
			}

			$output = str_replace("%ul_class%", $ul_class, $output);
			
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			if( $depth === 0 && !$this->has_megamenu ){
				$classes[]  =  "dropdown";
			}
			elseif( $depth > 0 && !$this->has_megamenu && $this->has_children ){
				$classes[]  = "dropdown-submenu";
			}

			if( $depth === 0 && $this->has_megamenu && $this->has_children )
			{
				$classes[] = "dropdown dropdown-mega";
			}

			if($item->current)
			{
				$classes[] = 'active';
			}
 
			/**
			 * Filter the arguments for a single nav menu item.
			 *
			 * @since 4.4.0
			 *
			 * @param array  $args  An array of arguments.
			 * @param object $item  Menu item data object.
			 * @param int    $depth Depth of menu item. Used for padding.
			 */
			$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

			/**
			 * Filter the CSS class(es) applied to a menu item's list item element.
			 *
			 * @since 3.0.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
			 * @param object $item    The current menu item.
			 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
			 * @param int    $depth   Depth of menu item. Used for padding.
			 */
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
			$title = apply_filters( 'the_title', $item->title, $item->ID );
			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
			
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			//var_dump($depth);
			/**
			 * Filter the ID applied to a menu item's list item element.
			 *
			 * @since 3.0.1
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
			 * @param object $item    The current menu item.
			 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
			 * @param int    $depth   Depth of menu item. Used for padding.
			 */
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			

			$output .= $indent . '<li' . $id . $class_names .'>';


			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

			if($this->has_children && $depth == 0)
			{
				$atts['class'] = "dropdown-toggle";
			}

			/** 
			 * Filter the HTML attributes applied to a menu item's anchor element.
			 *
			 * @since 3.6.0
			 * @since 4.1.0 The `$depth` parameter was added.
			 *
			 * @param array $atts {
			 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
			 *
			 *     @type string $title  Title attribute.
			 *     @type string $target Target attribute.
			 *     @type string $rel    The rel attribute.
			 *     @type string $href   The href attribute.
			 * }
			 * @param object $item  The current menu item.
			 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
			 * @param int    $depth Depth of menu item. Used for padding.
			 */
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			/** This filter is documented in wp-includes/post-template.php */
			$title = apply_filters( 'the_title', $item->title, $item->ID );

			/**
			 * Filter a menu item's title.
			 *
			 * @since 4.4.0
			 *
			 * @param string $title The menu item's title.
			 * @param object $item  The current menu item.
			 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
			 * @param int    $depth Depth of menu item. Used for padding.
			 */
			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			/**
			 * Filter a menu item's starting output.
			 *
			 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
			 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
			 * no filter for modifying the opening and closing `<li>` for a menu item.
			 *
			 * @since 3.0.0
			 *
			 * @param string $item_output The menu item's starting HTML output.
			 * @param object $item        Menu item data object.
			 * @param int    $depth       Depth of menu item. Used for padding.
			 * @param array  $args        An array of {@see wp_nav_menu()} arguments.
			 */
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		/**
		 * Ends the element output, if needed.
		 *
		 * @see Walker::end_el()
		 *
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param object $item   Page data object. Not used.
		 * @param int    $depth  Depth of page. Not Used.
		 * @param array  $args   An array of arguments. @see wp_nav_menu()
		 */
		public function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$output .= "</li>\n";
			
		}

	} // Walker_Nav_Menu
endif;