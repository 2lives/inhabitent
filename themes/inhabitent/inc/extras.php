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

//change login logo
function inhabitent_login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/Images/inhabitent-logo-text-dark.svg);
	height:65px;
	width:320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

function inhabitent_login_title(){
	return 'Inhabitent';
}

add_filter('login_headertitle', 'inhabitent_login_title');

// function about_hero_image() {
// if ( !is_page_template('page-templates/about.php') ) {
// 	return;
// }

//  $img = CFS()->get( 'hero_image' );
//  if(!$img){
// 	 return;
//  }
//  $hero_image_css =".page-template-about .entry_header{
// 	 background: url({$img}); 
	//  display: block;
	//  width: 100vw;
	//  height: 100vh;
// }";
// wp_add_inline_style('inhabitent-style', '$hero_image_css');
// }
// 			add_action('wp_enqueue_scripts','about_hero_image');

function user_select_hero() {
	if(  ! is_page_template('page-templates/about.php') ) {
		return;
	}

		$img = CFS () -> get('header_image');
		if(! $img){
			return;
		}
		$user_css = 
			".page-template-about .entry-header{
									background: url({$img}) no-repeat center bottom;
									background-size: cover;
									width: 100vw;
									height: 100vh;
								}";
	wp_add_inline_style( 'inhabitent-style', $user_css );
	}

add_action( 'wp_enqueue_scripts', 'user_select_hero' );
