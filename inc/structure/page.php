<?php
/**
 * Template functions used for pages.
 *
 * @package storefront
 */

if ( ! function_exists( 'storefront_page_header' ) ) {
	/**
	 * Display the post header with a link to the single post
	 * @since 1.0.0
	 */
	function storefront_page_header() {
		?>
		
		<?php
	}
}

if ( ! function_exists( 'storefront_page_content' ) ) {
	/**
	 * Display the post content with a link to the single post
	 * @since 1.0.0
	 */
	function storefront_page_content() {
		?>
		<div class="column-12 fitur-produk" itemprop="mainContentOfPage">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<?php
	}
}