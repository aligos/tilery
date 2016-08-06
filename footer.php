<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

    </div><!-- .col-full -->
  </div><!-- #content -->

  <?php do_action( 'storefront_before_footer' ); ?>
    <div class="container">

      <?php
      /**
       * @hooked storefront_footer_widgets - 10
       * @hooked storefront_credit - 20
       */
      do_action( 'storefront_footer' ); ?>

    </div><!-- .col-full -->

  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
  <script type="text/javascript"> var $214 = $.noConflict(true); </script>
  <script>
    $214("#menu-toggle").click(function(e) {
        e.preventDefault();
        $214("#wrapper").toggleClass("toggled");
    });
    $214("#menu-togel").click(function(e) {
        e.preventDefault();
        $214(".right-wrapper").toggleClass("toggler");
        console.log("toggler");
    });
    var $btns = $214('.b').click(function() {
      if (this.id == 'all') {
        $214('#parent > div').fadeIn(450);
      } else {
        var $el = $214('.' + this.id).fadeIn(450);
        $214('#parent > div').not($el).hide();
      }
      $btns.removeClass('active');
      $214(this).addClass('active');
    })
  </script>
  <script type="text/javascript"> if(typeof wabtn4fg==="undefined")   {wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="http://cdn.jsdelivr.net/whatsapp-sharing/1.3.3/whatsapp-button.js";h.appendChild(s)}</script>
</body>
</html>
