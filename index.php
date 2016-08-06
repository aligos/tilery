<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>
<div class="container">
         <?php

           $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
           $loop = new WP_Query( $args );
           while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
           <?php $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
            $single_cat = array_shift( $product_cats ); ?>
          <div id="parent">  
           <div class="<?php echo $single_cat->slug; ?> column-12 fitur-produk">
              <div class="thumbnail fitur-nhail">
                <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />'; ?>
                </a>
                <div class="title-produk">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <div class="harga-produk">
                    <span class="harga"><?php echo $product->get_price_html(); ?></span>
                    <?php
                      $metabox  = get_post_meta( $loop->post->ID, 'meta-product', true );
                      $size    = $metabox['select-size'];
                    ?>
                    <span class="ukuran"><?php echo $size; ?></span>
                  </div>
                </div>
                <div class="column-12 action-fitur">
                  <div class="column-4 fitur-icon fitur-left">
                    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist exists]'); ?>
                  </div>
                  <div class="column-4 fitur-icon fitur-center">
                    <i class="icon-lined-share"></i>
                    <span class="bagikan" data-toggle="modal" data-target="#<?php echo get_the_ID(); ?>">Bagikan</span>

                    <!-- Modal -->
                    <div id="<?php echo get_the_ID(); ?>" class="container modal fade" role="dialog">
                      <div class="column-12 fitur-produk share-produk-home">                        
                        <div class="column-12">
                          <h2><i class="icon-line-share-alt"></i> Bagikan dengan teman-temanmu</h2>
                        </div>
                        <div class="column-12">
                          <div class="column-6"><a class="btn-fb btn btn-beli" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink( $loop->post->ID ); ?>" target="_blank"><i class="icon-line-social-facebook"></i><span>facebook</span></a></div>
                          <div class="column-6 line">
                            <a href="http://line.me/R/msg/text/?<?php the_title( $loop->post->ID ); ?>%0D%0A<?php the_permalink( $loop->post->ID ); ?>"><img src="https://media.line.me/img/button/en/40x40.png" class="img-line" width="40px" height="40px" alt="LINE it!" /></a>
                            <a href="http://line.me/R/msg/text/?<?php the_title(  $loop->post->ID ); ?>%0D%0A<?php the_permalink( $loop->post->ID ); ?>" class="btn btn-line btn-beli"><span>LINE</span></a>
                          </div>
                        </div>                        
                      </div>
                    </div>
                  </div>
                  <div class="column-4 fitur-icon fitur-right">
                     <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
              <?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
