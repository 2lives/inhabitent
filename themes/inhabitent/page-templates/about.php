<?php /** 
 * Template Name: About Page
 * 
 * @package inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

	<div class="entry-content">
    <div class= "our-story"><?php echo CFS()->get( 'our_story' ); ?></div>
    <div class="our-team"><?php echo CFS()->get( 'our_team' ); ?></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->




    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>