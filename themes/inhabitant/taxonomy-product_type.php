<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Product Term Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-width archive">
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<div class="product-grid">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-item">
						<div class="thumbnail">
  							<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						</div>
						<div class="product-info">
							<p><?php the_title(); ?>
							<div class="ellipsis"></div>
							<?php echo '$' . CFS()->get( 'price' ); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>