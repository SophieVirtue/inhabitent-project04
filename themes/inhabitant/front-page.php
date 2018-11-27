<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 * Template Name: Home Page Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="home-hero">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'?>"
		class="logo" alt="Inhabitent full logo" />
		</section>

	<section class="frontpage-shop container-width">
	<h2>Shop Stuff</h2>
	<div class="shop-display">
	<?php
	
	$terms = get_terms(array(
		'taxonomy' => 'product_type', 
		'hide_empty' => 0,
	));

	foreach($terms as $term): ?>
		<div class="frontpage-term">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug . '.svg'; ?>" alt="<?php echo $term->name; ?>" />
		<p><?php echo $term->description; ?></p>
		<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> Stuff</a></p>
		</div>
	<?php endforeach;
	?>
	</div>
	</section>
	
	<?php
	/*
	 * Get the blog journal entries
	 */
	?>
	<section class="front-page-journal container-width">
	<h2>Inhabitent Journal</h2>
	<div class="journal-display">
	<?php
   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); 
   $product_posts = get_posts( $args );
 	?>
	 
	<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
    <article class="journal-entry">
	<?php 
	if ( has_post_thumbnail()) {  
	   the_post_thumbnail('medium');
	} 
	?>
	<div class="entry-display">
	<span class="entry-meta">
	<?php
	red_starter_posted_on();
	echo ' / ';
	comments_number( '0 Comments', '1 Comment', '% Comments' );
	?>
	</span>
	<a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
	<a class="read-more" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
	</div>	
</article>
	<?php endforeach; wp_reset_postdata(); ?>
	</div>
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

