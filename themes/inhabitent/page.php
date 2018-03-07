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

	<h2>we take camping very seriously.</h2>
	<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
	<h2> send us email!</h2>
	<?php
  echo do_shortcode(
    "[contact-form-7 id='156' title='Contact form 1']"
  );
?>
		</div><!-- #primary -->

<?php get_sidebar(); ?>

</div> <!--find-us-page-wrapper -->
<?php get_footer(); ?>
