<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 * Template Name: Single Product Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-width">
		<?php while ( have_posts() ) : the_post(); ?>
					
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<p class="price"><?php echo '$' . CFS()->get( 'price' ); ?></p>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		<div class="social-buttons">
			<button>
				<p><i class="fab fa-facebook-f fa-sm"></i> Like</p>
			</button>
			<button>
				<p><i class="fab fa-twitter fa-sm"></i> Tweet</p>
			</button>
			<button>
				<p><i class="fab fa-pinterest fa-sm"></i> Pin</p>
			</button>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
