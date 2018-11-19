<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-width">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

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

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
