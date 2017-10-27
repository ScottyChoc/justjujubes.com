<?php
/**
 *
 * @package Altitude
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/altitude/
 */

//* Remove the entry header markup (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//* Remove the entry meta in the entry header (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_post_info', 5 );

//* Remove the entry footer markup (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

//* Remove the entry meta in the entry footer (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );


add_action( 'genesis_before_loop', 'jj_recipe_nav_links' );
add_action( 'genesis_after_loop', 'jj_recipe_nav_links' );
function jj_recipe_nav_links() {
	?>
	<span class="back-to-recipes"><a href="/culinary/#recipes">See all recipes</a></span>
	<?php 
}
add_action( 'genesis_entry_content', 'custom_entry_content' ); // Add custom loop
function custom_entry_content() {

	the_post_thumbnail();
	?>

	<div class="recipe-elements">
		<div class="ingredients">
			<h4>Ingredients</h4>
			<?php the_field('recipe_ingredients'); ?>
		</div>
		<div class="ingredients">
			<h4>Directions</h4>
			<?php the_field('recipe_directions'); ?>
		</div>
	</div>
	<?php

}



genesis();