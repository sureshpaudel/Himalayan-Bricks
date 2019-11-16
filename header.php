<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <title>Himalayan Bricks</title>
    <!-- Bootstrap-->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/home_page_variation5/logo.png" type="image/png">
    <?php wp_head();?>
  </head>
  <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d9074aef68728fd"></script>
  <body>
    <!-- =========header start============-->
    <div class="variation_hdr2">
      <div class="full_width hdr_top_bar hdr5_top_bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
              <p class="hdr_certified var5_certi_gray"><?php echo get_field('iso_certified',7); ?></p>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 call-center">
              <div class="hdr_top_call var5_tp_call"> <?php echo get_field('phone_number',7); ?></div>
              <div class="hdr_social_icons second_var fifth_var">
                <a href="<?php echo get_field('fb_link'); ?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                <a href="<?php echo get_field('twtr_link'); ?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                <a href="<?php echo get_field('google_link'); ?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
                <a href="<?php echo get_field('linkdlin_link'); ?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="fa fa-linkedin"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <header class="full_width var3_header var5_header">
        <nav id="main-navigation-wrapper" class="navbar navbar-default finance-navbar var2_main_menu_wrapper var3_main_menu_wrapper var5_main_menu_wrapper">
          <div class="thm-container">
            <div class="navbar-header" >
              <div class="logo-menu">
                <?php
                  if(has_custom_logo()||is_customize_preview()){
                    the_custom_logo();
                  }else{
                   ?><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/home_page_variation5/logo.png" alt=""></a>
                <?php } ?>
              </div>
              <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse var2_main_menu_wrapper var3_main_menu_wrapper var5_main_menu_wrapper">
              <div class="row row m_zero" id="logoupdate">
                <div class="col-md-3 col-sm-12 col-xs-12 logo" >
                  <?php
                    if(has_custom_logo()||is_customize_preview()){
                      the_custom_logo();
                    }else{
                     ?>

                  <a href="index.php"><img src="<?php echo get_template_directory_uri() ?>/images/home_page_variation5/logo.png" alt=""></a>

                  <?php } ?></div>
                <div class="col-md-7 col-sm-12 col-xs-12 col_pad_zero_new top77">
                  <div id="main-navigation-inn">
                    <ul class="nav navbar-nav">
                      <?php
                      wp_nav_menu( array(
                     'theme_location' => 'primary',
                     'menu' => 'menu',
                     'container' => false,
                     'items_wrap'=>'%3$s',
                 ) );
             ?>
                    </ul>
                    <div class="hdr_search second_var_hdr_search search_mobile_none">
                      <button type="submit" class="btn btn-default"></button>
                    </div>
                    <div class="quote_mob"><a href="#" class="view-all hvr-bounce-to-right get_quote_btn get_quote_mob" data-toggle="modal" data-target="#quotemodal"> Get quote </a></div>
                  </div>
                </div>
                 <div class="col-md-2 pull-right col-sm-12 col-xs-12 col_pad_zero_new top77">
                 	<div class="quote_desktop"><a href="#" class="view-all hvr-bounce-to-right get_quote_btn" data-toggle="modal" data-target="#quotemodal"> Get quote </a></div>
                 </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <!-- =========header end============-->
     <!-- Modal -->
<div class="modal fade" id="quotemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request A Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <?php echo do_shortcode('[caldera_form id="CF5d92db7fbdcbe"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
