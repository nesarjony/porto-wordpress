<?php


class widgetSocialIcon extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */

	function __construct() {

		$widget_ops = array(
			'classname' => 'widget_text',
			'description' => __( 'Appear Social Media Icon On Footer', 'porto' ),
			'customize_selective_refresh' => true,
		);
		$control_ops = array( 'width' => 400, 'height' => 350 );

		parent::__construct(			
			'social-icon', // Base ID
			__( 'Porto Social Box', 'porto' ), // Name
			$widget_ops,$control_ops  // Args
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
		echo $args['before_widget'];

		$title = !empty($instance["title"]) ? $instance["title"] : "";
		$count = !empty($instance["count"]) ? $instance["count"] : "";

		echo $args['before_title'];
		echo $title;
		echo $args['after_title'];
		echo portoSocialMedia(false,$count);
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
		$count = !empty($instance["count"]) ? $instance["count"] : "";

?>
<p>
   <label for='<?php echo $this->get_field_id("title") ?>'>Title: </label>
   <input type='text' name='<?php echo $this->get_field_name("title") ?>' placeholder="" id='<?php echo $this->get_field_id("title") ?>' value="<?php echo $title ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("count") ?>'>Count</label>
   <input type='text' name='<?php echo $this->get_field_name("count") ?>' placeholder="" id='<?php echo $this->get_field_id("count") ?>' value="<?php echo $count ?>" />
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
		$instance["count"] = ( !empty($new_instance["count"])) ? strip_tags($new_instance["count"]) : "";


		return $instance;
	}

}
