<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Sorted Template
 */

get_header(); ?>

	<div id="primary" class="content-area container-width">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
				
				<header>
					<h1 class="archive-title"><?php the_archive_title(); ?></h1>
				</header>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>