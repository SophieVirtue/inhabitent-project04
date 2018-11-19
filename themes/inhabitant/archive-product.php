<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
          	<div class="container-width archive">
				<header class="page-header">
			
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						$terms = get_terms(array(
						'taxonomy' => 'product_type', 
						'hide_empty' => 0,
					)); ?>
				
					<div class="archive-term">
						<?php foreach($terms as $term): ?>
						<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>
						<?php endforeach;?>
					</div>
				
				</header><!-- .page-header -->

				<div class="product-grid">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-item">
						<div class="thumbnail">
    						<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						</div>
    					<div class="product-info">
    						<p><?php the_title(); ?></p>
   							<div class="ellipsis"></div>
    						<p class="price"><?php echo '$' . CFS()->get( 'price' ); ?></p>
    					</div>
					</div>
					<?php endwhile; ?>
				</div>

            </div><!--.container-width-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>