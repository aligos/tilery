<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<div id="fb-root"></div>

<script>
    function fbs_click(width, height) {
        var leftPosition, topPosition;
        //Allow for borders.
        leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
        //Allow for title and status bars.
        topPosition = (window.screen.height / 2) - ((height / 2) + 50);
        var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
        u = location.href;
        t = document.title;
        window.open('http://www.facebook.com/sharer.php?u=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', windowFeatures);
        return false;
    }

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=178858915779041";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    appId  : '178858915779041',
    status : true, 
    cookie : true, 
    xfbml  : true  
  });
    
</script>
<?php echo $metabox['product-retargeting']; ?>
<?php global $redux_demo; echo $redux_demo['pixel-code']; ?>
</head>

<body <?php body_class(); ?>>
  <?php
  do_action( 'storefront_before_header' );
  global $redux_demo; ?>

  <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
              
              <div class="sidebar-nav">
                <ul>
                  <li><a class="b active" id="all">Semua Kategori</a></li>
                  <?php global $redux_demo;
                    $checkbox1 = $redux_demo['menu-1'];
                    $arrcat1 = get_term_by( 'id', $checkbox1, 'product_cat' ); ?>
                  <li><a class="b" id="<?php echo $arrcat1->slug; ?>"><?php echo $arrcat1->name; ?></a></li>
                  <?php global $redux_demo;
                    $checkbox2 = $redux_demo['menu-2'];
                    $arrcat2 = get_term_by( 'id', $checkbox2, 'product_cat' ); ?>
                  <li><a class="b" id="<?php echo $arrcat2->slug; ?>"><?php echo $arrcat2->name; ?></a></li>
                  <?php global $redux_demo;
                    $checkbox3 = $redux_demo['menu-3'];
                    $arrcat3 = get_term_by( 'id', $checkbox3, 'product_cat' ); ?>
                  <li><a class="b" id="<?php echo $arrcat3->slug; ?>"><?php echo $arrcat3->name; ?></a></li>
                  <?php global $redux_demo;
                    $checkbox4 = $redux_demo['menu-4'];
                    $arrcat4 = get_term_by( 'id', $checkbox4, 'product_cat' ); ?>
                  <li><a class="b" id="<?php echo $arrcat4->slug; ?>"><?php echo $arrcat4->name; ?></a></li>
                  <?php global $redux_demo;
                    $checkbox5 = $redux_demo['menu-5'];
                    $arrcat5 = get_term_by( 'id', $checkbox5, 'product_cat' ); ?>
                  <li><a class="b" id="<?php echo $arrcat5->slug; ?>"><?php echo $arrcat5->name; ?></a></li>
                </ul>

              </div>
              <?php storefront_primary_navigation(); ?> 
          </div>
          <!-- /#sidebar-wrapper -->
  </div>

  <div class="right-wrapper">

          <!-- Sidebar -->
          <div class="right-sidebar-wrapper">
              <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
          </div>
          <!-- /#sidebar-wrapper -->
  </div>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

          <a class="navbar-brand"><img id="img-logo" onclick="window.location = '/wordpress';" src="<?php echo $redux_demo['opt-media']['url']; ?>" alt="logo"></img></a>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
           
            <ul class="nav navbar-nav navbar-left">
              <!--               <li><a href="#"><i class="icon-line-home"></i></a></li> -->
              <li class="down">
                <a href="#" id="menu-toggle" data-toggle="dropdown"><i class="icon-line-list"></i></a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><?php love(); ?></li>
              <li id="menu-togel"><?php storefront_cart_link(); ?></li>              
            </ul>
          </div><!-- /.navbar-collapse -->
    </div>
  </nav>
