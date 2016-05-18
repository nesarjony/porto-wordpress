<?php	

add_action("widgets_init",function(){
	register_widget('widgetSocialIcon');
	register_widget('portoText');
	register_widget('portoContactBox');
	register_widget('portoFooterMenuNarrow');
});