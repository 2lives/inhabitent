<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="find-us-wrapper-id" class="find-us-page-wrapper">
	<div id="primary" class="findus-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	<div style="width: 100%">
		<iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;q=1490%20West%20Broadway%2C%20Vancouver%2C%20V6H+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			<a href="https://www.maps.ie/create-google-map/">Google map generator</a>
		</iframe>
	</div>
	<br />

	<h2>we take camping very seriously.</h2>
	<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
	<h2> send us email!</h2>
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div> <!--find-us-page-wrapper -->
<?php get_footer(); ?>
