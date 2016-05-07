			<?php 
					$layout = cs_get_option('footer_style');
					$options = portoFooterOptions( $layout );
				?>
			<footer<?php echo $options['footer_class'] != "" ? " class='".$options['footer_class']."'" : "" ?>  id="footer"> 
				<?php include_once 'templates/footers/template-footer.php' ?>
			</footer>
		</div>
		<!-- Vendor -->


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
<?php wp_footer(); ?>