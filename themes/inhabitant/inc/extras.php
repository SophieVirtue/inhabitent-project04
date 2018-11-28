<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px auto;
		background-repeat: no-repeat;
		}
		body.login .button{
			background-color: #248A83;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*
*Custom Hero image for the About page
*/

function inhabitant_dynamic_css(){
	if(!is_page_template('about.php')){
      return;
	}

$image = CFS()->get('about_header_image');

if (!$image){
	$hero_css = '.page-template-about .entry-header {
		background: grey;
		color: white;
		height: 100vh;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}';
} else {
	$hero_css = ".page-template-about .entry-header {
		background: grey;
		background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url({$image}) no-repeat center bottom;
		color: white;
		width: 100%;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background-size: cover;
	}";
}

wp_add_inline_style('tent-style', $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitant_dynamic_css');

 /*
  *Modify the Product post type archive loop
  */
function inhabitent_mod_post_type_archive( $query ){
	if(
		( is_post_type_archive( array( 'product')) || $query->is_tax( 'product_type'))
		&& !is_admin()
		&& $query->is_main_query()
	){
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
}

add_action( 'pre_get_posts', 'inhabitent_mod_post_type_archive' );

 /*
  *Filter the Product archive title
  */

  function inhabitent_archive_title($title){
	  if( is_post_type_archive( 'product')){
		$title = 'Shop Stuff';
	  }elseif( is_tax( 'product_type' )){
		$title = sprintf( '%1$s', single_term_title( '', false));
	  }
	  return $title;
  }

  add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );