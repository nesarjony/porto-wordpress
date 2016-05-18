<?php


class portoFooterMenuNarrow extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */

	function __construct() {

		parent::__construct(
			'footer-menu-narrow', // Base ID
			__( 'Porto Footer Menu Narrow', 'porto' ), // Name
			array( 'description' => __( 'Porto Footer Narrow Menu fit On footer 2,footer 3 and footer 4', 'porto' ) ) // Args
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
		portoWpFooterMenuNarrow();
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
		

		return $instance;
	}

}
