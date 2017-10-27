<?php
/**
 * Altitude Pro.
 *
 * This file adds the front page to the Altitude Pro Theme.
 *
 * @package Altitude
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/altitude/
 */

add_action( 'genesis_meta', 'altitude_front_page_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 * @since 1.0.0
 */
function altitude_front_page_genesis_meta() {

		// Enqueue scripts.
		add_action( 'wp_enqueue_scripts', 'altitude_enqueue_altitude_script' );

		// Add front-page body class.
		add_filter( 'body_class', 'altitude_body_class' );

		// Force full width content layout.
		add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

		// Remove breadcrumbs.
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		// Remove the default Genesis loop.
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Add homepage widgets.
		add_action( 'genesis_loop', 'altitude_front_page_content' );

		// Add featured-section body class.
		if ( is_active_sidebar( 'front-page-1' ) ) {

			// Add image-section-start body class.
			add_filter( 'body_class', 'altitude_featured_body_class' );

		}

}

// Define front page scripts.
function altitude_enqueue_altitude_script() {
	wp_enqueue_script( 'altitude-script', get_stylesheet_directory_uri() . '/js/home.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}

// Define front-page body class.
function altitude_body_class( $classes ) {

	$classes[] = 'front-page';

	return $classes;

}

// Define featured-section body class.
function altitude_featured_body_class( $classes ) {

	$classes[] = 'featured-section';

	return $classes;

}

// Add markup for front page content.
function altitude_front_page_content() {

	echo '<h2 class="screen-reader-text">' . __( 'Main Content', 'altitude-pro' ) . '</h2>';

	?>

	<div id="front-page-1" class="front-page-1" tabindex="-1">
		<div class="image-section">
			<?php //the_field( 'section_1_content')?>
			<div class="wrap">
				<div class="one-third first hero-img">
					<?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/jujubes_pouch_white.png" alt="Just Jujubes" />'; ?>
				</div>
				<div class="two-thirds hero-content">
					<h4>
						<span class="green">JuJu... </span><span class="red">What?</span>
					</h4>
						<p><strong>Jujube! </strong>The ancient world superfruit winning over modern taste buds. Revered for millennia for its nutraceutical powers and delicious flavor, this handy, healthy snack packs a whimsical wallop in every subtly sweet bite.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="front-page-offer" class="front-page-offer">
		<div class="wrap">
			<p>For a limited time only, FRESH Organic Jujubes are available at select retailers in California. <a href="/product/fresh-jujubes/">Learn More</a></p>
		</div>
	</div>

	<div id="front-page-2" class="front-page-2" tabindex="-1">
		<div class="solid-section">
			<?php //the_field( 'section_2_content')?>
			<div class="headline">
			<div class="wrap">
				<h4>A Nutritional Powerhouse</h4>
				<p>Jujubes are rich in Vitamins &amp; Minerals, Antioxidants, Flavonoids, Polyphenols, and Free Amino Acids</p>
				</div>
			</div>
			<?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/nutrition.jpg" alt="A Nutritional Powerhouse" />'; ?>

		</div>
	</div>

	<div id="front-page-3" class="front-page-3" tabindex="-1">
		<div class="image-section">
				<?php //the_field( 'section_3_content')?>
					<h4>Eco-Friendly &amp; Sustainable</h4>
			<div class="checklist">
				<div class="wrap">
					<ul>
					 	<li>No waste</li>
					 	<li>Little water</li>
					 	<li>Certified Organic</li>
					 	<li>California grown</li>
					 	<li>Sun-ripened</li>
					 	<li>Hand-picked</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="front-page-4" class="front-page-4" tabindex="-1">
		<div class="solid-section">
			<?php //the_field( 'section_4_content')?>
			<div class="languages-1"></div>
			<div class="wrap">
				<h4>World’s Ancient Superfruit</h4>
				<p>Literature from 900 BC has documented the jujube fruit sustaining and providing health benefits to people throughout Asia and other parts of the world for thousands of years.</p>
			</div>
			<div class="languages-2"></div>
		</div>
	</div>


	</div>

<?php 

}

// Run the Genesis loop.
genesis();
