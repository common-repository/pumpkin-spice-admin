<?php
/**
 * Plugin Name:     Pumpkin Spice Admin
 * Description:     Enjoy the fallidays
 * Author:          Cornershop Creative
 * Author URI:      https://cornershopcreative.com
 * Text Domain:     pumpkinspice
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Pumpkinspice
 */

/**
 * Add CSS
 */
function pspice_theme_style() {
	wp_enqueue_style( 'pspice-admin-theme', plugins_url( 'pumpkin-spice.css', __FILE__ ), array(), '0.1.0' );
}


/**
 * Add HTML
 */
function pspice_footer() { ?>
<div id="fall-container">
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf.png', __FILE__ ) ); ?>" alt>
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf2.png', __FILE__ ) ); ?>" alt id="leaf2">
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf4.png', __FILE__ ) ); ?>" alt id="leaf3">
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf5.png', __FILE__ ) ); ?>" alt id="leaf4">
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf7.png', __FILE__ ) ); ?>" alt id="leaf5">
	<img src="<?php echo esc_url( plugins_url( 'assets/leaf6.png', __FILE__ ) ); ?>" alt id="leaf6"> 
</div>
	<?php
}

/**
 * Only do things in the fall, of course.
 */
if ( gmdate( 'n' ) > 8 && gmdate( 'n' ) < 12 ) {
	add_action( 'admin_enqueue_scripts', 'pspice_theme_style', 99 );
	add_action( 'admin_footer', 'pspice_footer' );
}
