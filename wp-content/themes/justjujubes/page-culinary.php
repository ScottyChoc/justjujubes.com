<?php
/**
 * Template Name: Culinary
 *
 * @package JustJujubes
 * @author  Scott Loveless
 * @license GPL-2.0+
 * @link    http://scott.loveless.org
 */

add_action( 'genesis_after_entry', 'jj_recipe_loop' );
	function jj_recipe_loop() {

		$args = array(
			'post_type' => 'recipe', 
		);
		$loop = new WP_Query( $args );
		if( $loop->have_posts() ) {
			echo '<h4 id="recipes">Recipes</h4><div class="recipe-grid">';
			// loop through posts
			while( $loop->have_posts() ): $loop->the_post();

			echo '
				<div class="recipe">
					<a href="' . get_the_permalink() . '">
						<h4>' . get_the_title() . '</h4>
						' . get_the_post_thumbnail() . '
					</a>
				</div>
			';
			endwhile;
			echo '</div>';
		}
		wp_reset_postdata();
	}

genesis();