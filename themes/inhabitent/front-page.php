<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

      <?php echo "<h2>shop stuff</h2>";?>
      <?php echo "<h2>inhabitent journal</h2>";?>
      <?php echo "<h2>latest adventures</h2>";?>
		</main><!-- #main -->
  </div><!-- #primary -->
  
  <?php get_footer(); ?>