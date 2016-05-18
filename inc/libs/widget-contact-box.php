<?php


class portoContactBox extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */

	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_text',
			'description' => __( 'Porto Contact Box is a Contact Info Widget', 'porto' ),
			'customize_selective_refresh' => true,
		);

		$control_ops = array( 'width' => 400, 'height' => 350 );

		parent::__construct(
			'contact-box', // Base ID
			__( 'Porto Contact Box', 'porto' ), // Name
			$widget_ops,$control_ops// Args
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
		$phone_general = !empty($instance["phone-general"]) ? $instance["phone-general"] : "";
		$phone_international = !empty($instance["phone-international"]) ? $instance["phone-international"] : "";
		$fax = !empty($instance["fax"]) ? $instance["fax"] : "";
		$email = !empty($instance["email"]) ? $instance["email"] : "";
		$social_box = !empty($instance["social-box"]) ? $instance["social-box"] : "";

?>	
	<!-- Put your html here -->
		<?php if($title):?>
			<h5 class="mb-sm"><?php echo $title ?></h5>
		<?php endif ?>
		<?php if($phone_general):?>
		<span class="phone"><?php echo $phone_general ?></span>
		<?php endif ?>
		<?php if($phone_international): ?>
		<p class="mb-none">International: <?php echo $phone_international ?></p>
		<?php endif ?>
		<?php if($fax): ?>
		<p class="mb-none">Fax: <?php echo $fax ?></p>
		<?php endif ?>
		<?php if($email): ?>
		<ul class="list list-icons list-icons-sm">
			<li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
		</ul>
	<?php endif ?>
		<?php 
			if($social_box) {
				portoSocialMedia();
			}
		?>

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
		$phone_general = !empty($instance["phone-general"]) ? $instance["phone-general"] : "";
		$phone_international = !empty($instance["phone-international"]) ? $instance["phone-international"] : "";
		$fax = !empty($instance["fax"]) ? $instance["fax"] : "";
		$email = !empty($instance["email"]) ? $instance["email"] : "";
		$social_box = !empty($instance["social-box"]) ? $instance["social-box"] : "";

?>
<p>
   <label for='<?php echo $this->get_field_id("title") ?>'>Title:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("title") ?>'  id='<?php echo $this->get_field_id("title") ?>' value="<?php echo $title ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("phone-general") ?>'>Phone General:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("phone-general") ?>'  id='<?php echo $this->get_field_id("phone-general") ?>' value="<?php echo $phone_general ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("phone-international") ?>'>Phone International:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("phone-international") ?>'  id='<?php echo $this->get_field_id("phone-international") ?>' value="<?php echo $phone_international ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("fax") ?>'>Fax:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("fax") ?>'  id='<?php echo $this->get_field_id("fax") ?>' value="<?php echo $fax ?>" />
</p>

<p>
   <label for='<?php echo $this->get_field_id("email") ?>'>Email:</label>
   <input class="widefat" type='text' name='<?php echo $this->get_field_name("email") ?>'  id='<?php echo $this->get_field_id("email") ?>' value="<?php echo $email ?>" />
</p>
<p>
   <label for='<?php echo $this->get_field_id("social-box") ?>'></label>
   <input class="widefat" type='checkbox' name='<?php echo $this->get_field_name("social-box") ?>' id='<?php echo $this->get_field_id("social-box") ?>'<?php echo $social_box ? "checked":"" ?>/>Enable Social Media
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
		$instance["phone-general"] = ( !empty($new_instance["phone-general"])) ? strip_tags($new_instance["phone-general"]) : "";
		$instance["phone-international"] = ( !empty($new_instance["phone-international"])) ? strip_tags($new_instance["phone-international"]) : "";
		$instance["fax"] = ( !empty($new_instance["fax"])) ? strip_tags($new_instance["fax"]) : "";
		$instance["email"] = ( !empty($new_instance["email"])) ? strip_tags($new_instance["email"]) : "";
		$instance["social-box"] = ( !empty($new_instance["social-box"])) ? strip_tags($new_instance["social-box"]) : "";

		return $instance;
	}

}
