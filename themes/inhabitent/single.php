<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->
<div class="single-wrapper">
	<div class="single-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
	
		<?php endwhile; // End of the loop. ?>
			</div>
		<!-- </main>#main -->
	<!-- </div>#primary -->

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
