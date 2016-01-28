<?php

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' ); 

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( 
	array(
		'primary'   => __( 'Top menu', 'julienmontavit' ),
		'secondary' => __( 'Secondary menu in left sidebar (drawer)', 'julienmontavit' ),
	) 
);

/**
 * Remove <li> tags from menu items and add class to <a> tags
 */
function jm_nav_menu($nav_menu)
{
	$nav_menu =  strip_tags($nav_menu, '<nav><a>');
	echo preg_replace('/<a /', '<a class="mdl-navigation__link"', $nav_menu);
}

add_filter('wp_nav_menu', 'jm_nav_menu');

/**
 * Add header image to css
 * Allow the use of admin defined header image
 *
 * TODO : use different image for each screen size
 */
function add_styles()
{
	?>
	<style type="text/css">
	@media (max-width: 512px)  and (min-resolution: 1.5dppx),
       (max-width: 1024px) and (max-resolution: 1.5dppx) {
	 	body::before {
	    background-image: url('<?php echo get_header_image(); ?>');
	  }
	}
	@media (min-width: 513px)  and (max-width: 1024px) and (min-resolution: 1.5dppx),
	       (min-width: 1025px) and (max-width: 2048px) and (max-resolution: 1.5dppx)  {
	  body::before {
	    background-image: url('<?php echo get_header_image(); ?>');
	  }
	}
	@media (min-width: 1025px) and (min-resolution: 1.5dppx),
	       (min-width: 2049px) and (max-resolution: 1.5dppx) {
	  body::before {
	    background-image: url('<?php echo get_header_image(); ?>');
	  }
	}
	</style>
	<?php
}

add_action('wp_head', 'add_styles');