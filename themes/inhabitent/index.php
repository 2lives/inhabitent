<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="journal-wrapper" class="content-wrapper">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
		<div class="article-tile">
				<?php get_template_part( 'template-parts/content' ); ?>
				<a href="<?php echo get_permalink(); ?>" rel="bookmark" class="journal-readmore">Read More →</a>
		</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	
		</main><!-- #main -->


<?php get_sidebar(); ?>
</div><!-- #primary -->
<?php get_footer(); ?>
