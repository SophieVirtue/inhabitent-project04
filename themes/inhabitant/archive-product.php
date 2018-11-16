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
				));

				foreach($terms as $term): ?>
				<div class="archive-term">
				<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>
				</div>
			<?php endforeach;
			?>
				
			</header><!-- .page-header -->

<?php while ( have_posts() ) : the_post(); ?>

    <a href="<?php the_posts_navigation(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>

    <div class="product-info">
    <p><?php the_title(); ?>
    <div class="ellipsis"></div>
    <?php echo CFS()->get( 'price' ); ?></p>
    </div>

<?php endwhile; ?>

            </div><!--.container-width-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>