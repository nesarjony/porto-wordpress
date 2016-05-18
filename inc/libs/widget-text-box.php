<?php


class portoText extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */

	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_text',
			'description' => __( 'Porto Text box is a Multi-feature  Wordpress Text widget', 'porto' ),
			'customize_selective_refresh' => true,
		);

		$control_ops = array( 'width' => 400, 'height' => 350 );

		parent::__construct('porto-text', // Base ID
						__( 'Porto Text Box', 'porto' ), // Name
							$widget_ops,$control_ops // Args
				);

	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

	public function widget( $args, $instance ) {
		

		$title 		= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		$widget_text= !empty($instance["text"]) ? $instance["text"] : "";
		$text = apply_filters( 'widget_text', $widget_text, $instance, $this );

		$page_link  = !empty($instance["page_link"]) ? $instance["page_link"] : "";
		$page  		= !empty($instance["pages"]) ? $instance["pages"] : "";
		$link_text  = !empty($instance["link_text"]) ? $instance["link_text"] : "";

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
?>	
	<p>
		<?php echo $text; ?>

		<?php if(!empty($page_link)): ?>
			<?php 
				echo " ...";
			?>
				<a href="<?php echo $page ?>" class="btn-flat btn-xs"><?php echo $link_text ? $link_text : 'View More' ?> <i class="fa fa-arrow-right"></i></a> 
		<?php endif ?>
	</p>

<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */

	public function form( $instance ) {

		$title = !empty($instance["title"]) ? $instance["title"] : "";
		$text = !empty($instance["text"]) ? $instance["text"] : "";
		$page_link = !empty($instance["page_link"]) ? $instance["page_link"] : "";
		$link_text = !empty($instance["link_text"]) ? $instance["link_text"] : "";

?>
<p>
   <label for='<?php echo $this->get_field_id("title") ?>'>Title:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("title") ?>' placeholder="Your field Value" id='<?php echo $this->get_field_id("title") ?>' value="<?php echo esc_attr($title); ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("text") ?>'>Text:</label>
   <textarea class="widefat" rows="16" cols="20" name='<?php echo $this->get_field_name("text") ?>' id='<?php echo $this->get_field_id("text") ?>'><?php echo esc_textarea( $instance['text'] ); ?></textarea>
</p>
 
<p>
   <label for='<?php echo $this->get_field_id("page_link") ?>'></label>
   <input type='checkbox' name='<?php echo $this->get_field_name("page_link") ?>' id='<?php echo $this->get_field_id("page_link") ?>' <?php  echo $page_link ? 'checked':'' ?>/> Add Page Link
</p>
<?php $pages = get_pages() ?>
<p>
   <label for='<?php echo $this->get_field_id("pages") ?>'>Select A pages</label>
   <select name='<?php echo $this->get_field_name("pages") ?>' id='<?php echo $this->get_field_id("pages") ?>'>
   		<?php foreach($pages as $page): ?>
   		<option value="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></option>
   		<?php endforeach ?>
   </select>
</p>

<p>
   <label for='<?php echo $this->get_field_id("link_text") ?>'>Link Text</label>
   <input type='text' name='<?php echo $this->get_field_name("link_text") ?>'  id='<?php echo $this->get_field_id("link_text") ?>' value="<?php echo $link_text ?>" />
</p>


<?php 

	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */

	public function update( $new_instance, $old_instance ) {
		
		$instance["title"] = ( !empty($new_instance["title"])) ? strip_tags($new_instance["title"]) : "";

		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['text'] = $new_instance['text'];
		} else {
			$instance['text'] = wp_kses_post( $new_instance['text'] );
		}

		$instance["page_link"] = ( !empty($new_instance["page_link"])) ? strip_tags($new_instance["page_link"]) : "";
		$instance["pages"] = ( !empty($new_instance["pages"])) ? strip_tags($new_instance["pages"]) : "";
		$instance["link_text"] = ( !empty($new_instance["link_text"])) ? strip_tags($new_instance["link_text"]) : "";


		return $instance;
	}

}
