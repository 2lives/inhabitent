<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="contact-info">
					<?php echo "<h3> contact info </h3>";?>
					<p><i class="fas fa-envelope"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('info@inhabitent.com')); ?></a></p>
					<p><i class="fas fa-phone"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('778-456-7891')); ?></a></p>
					<p>
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
					</p>
				</div><!-- .contact-info -->
				<div class="business-hours">
				<?php echo "<h3> business hours </h3>";?>
				<?php echo "<p><span class='bold'> Monday-Friday: </span> 9am to 5pm</p>";?>
				<?php echo "<p><span class='bold'> Saturday: </span> 10am to 2pm</p>";?>
				<?php echo "<p><span class='bold'> Sunday: </span> Closed</p>";?>
				</div>
				<div class="logosvg">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/inhabitent-logo-text.svg"/></a>	
				</div>
			</footer><!-- #colophon -->
			<div class="footer-copywrite">
					<p>copywrite &copy; 2018 inhabitent </p>
				</div>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
