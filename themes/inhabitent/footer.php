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
					<a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('info@inhabitent.com')); ?></a>
					<a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('778-456-7891')); ?></a>
					<!-- icons to be placed here-->
				</div><!-- .contact-info -->
				<div class="business-hours">
				<?php echo "<h3> business hours </h3>";?>
				<?php echo "<p><span class='bold'> monday-friday: </span> 9am to 5pm</p>";?>
				<?php echo "<p><span class='bold'> saturday: </span> 10am to 2pm</p>";?>
				<?php echo "<p><span class='bold'> sunday: </span> closed</p>";?>
				</div>
				<div class="logo-text">
				<?php echo "<a><span class='footerlogo'>inhabitent<br/></span>camping supply co.</p></a>";?>
				<?php echo "<i class='fas fa-address-card'></i>";?>
				</div>

			</footer><!-- #colophon -->
			<?php echo "<p class='copywrite'>copywrite &copy; 2017 inhabitent</p>";?>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
