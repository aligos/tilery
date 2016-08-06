<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php
      do_action( 'storefront_single_post_before' );

      get_template_part( 'content', 'single' );

      /**
       * @hooked storefront_post_nav - 10
       * @hooked storefront_display_comments - 20
       */
      do_action( 'storefront_single_post_after' );
      ?>

    <?php endwhile; // end of the loop. ?>
  </div><!-- #primary -->
<?php get_footer(); ?>