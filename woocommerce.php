<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header();
  $metabox  = get_post_meta( get_the_ID(), 'meta-product', true );
  $size    = $metabox['select-size'];
 ?>

  <div class="container">
           <?php
             $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 1, 'orderby' =>'date','order' => 'DESC' );
             $loop = new WP_Query( $args );
             while ( have_posts() ) : the_post(); global $post,$product; 

              $cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
              $tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
             ?>

             <div class="column-12 fitur-produk">
                <div class="thumbnail fitur-nhail">
                  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                       <?php if (has_post_thumbnail()) echo get_the_post_thumbnail(); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                  </a>
                  <div class="title-produk">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="harga-produk">
                      <span class="harga"><?php echo $product->get_price_html(); ?></span>
                      <span class="ukuran"><?php echo $metabox['select-size']; ?></span>
                    </div>
                  </div>
                  <div class="short-description action-fitur">
                    <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
                  </div>
                  <div class="column-12 action-fitur">
                    <div class="column-4 fitur-icon fitur-left">
                      <?php echo do_shortcode('[yith_wcwl_add_to_wishlist exists]'); ?>
                    </div>
                    <div class="column-4 fitur-icon fitur-center">
                      <a href="whatsapp://send" data-text="Take a look at this awesome website:" data-href="" class="wa_btn wa_btn_s" style="display:none">Share</a>
                    </div>
                    <div class="column-4 fitur-icon fitur-right">
                       <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
                  </div>
                </div>
             </div>
             <div class="column-12 fitur-produk share-produk">
             <div class="column-4 share-story">
              <i class="share-icon icon-lined-share"></i>
              <span>Berbagi <span class="span-hide">Dengan Teman-temanmu</span></span>
             </div>
              <div class="column-4"><a class="btn-fb btn btn-beli" data-layout="button_count" onClick="return fbs_click(600, 300)" target="_blank"><i class="icon-line-social-facebook"></i><span>facebook</span></a></div>
              <div class="column-4">
                <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="https://media.line.me/img/button/en/40x40.png" class="img-line" width="40px" height="40px" alt="LINE it!" /></a>
                <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>" class="btn btn-line btn-beli"><span>LINE</span></a>
              </div>                         
             </div>
            <?php endwhile; ?>
  </div>
<?php get_footer(); ?>
