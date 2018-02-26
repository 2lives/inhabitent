<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="image-stack">
		<div class="hero-image">		
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/Images/home-hero.jpg" style="rgba(0, 0, 0, 1.7);";/> -->
		</div><!--hero-image-->
		<div class="tent-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/Images/inhabitent-logo-full.svg"/>
		</div> <!--tent-logo-->
	</div> <!--image-stack-->
				<!-- Product terms -->
				<section class="product-info-container">
                <h2>Shop Stuff</h2>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product_type',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $terms ) ) :
                    ?>
                    <div class="product-type-blocks">
                        <?php foreach ( $terms as $term ) :
                            ?>
                            <div class="product-type-block-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/Images/' . $term->slug; ?>.svg"
                                     alt="<?php echo $term->name; ?>"/>
                                <p><?php echo $term->description; ?></p>
                                <p>
                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="btn"><?php echo $term->name; ?> Stuff</a>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
			
	<div class="inhabitent-journal">
				<?php
				// The Query
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3
				);
				$journal = get_posts( $args );

				// The Loop
				if ( ! empty ($journal) ) :?>
					<h2>Inhabitent journal</h2>
					<ul>
						<?php foreach ($journal as $post) : setup_postdata ($post); ?>
							<li>
								<?php if (has_post_thumbnail()) : ?>
									<div class="thumbnail-wrapper">
										<?php the_post_thumbnail ('large'); ?>
									</div>
								<?php endif; ?>
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
								
								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								</div>
								<a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
							</li>
				<?php endforeach;
				wp_reset_postdata(); ?>
				</ul>
				<?php endif?>
			</div> <!-- Inhabitent Journal -->

  
  <?php get_footer(); ?>