<?php
//template name:Front Page template
get_header();
?>
<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width">
  <!-- Wrapper for slides-->
  <div role="listbox" class="carousel-inner ver_new_5_slider">
    <?php
    $i=0;
      $args= array(
     'post_type'=>'slider',
     'posts_per_page'=>-1,
     'orderby'=>'title',
     'order'=>'ASC'
     );
    $sliders= new WP_Query($args);
    while($sliders->have_posts()):$sliders->the_post();
    ?>
    <div style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);" class="item <?php if($i==0) {echo "active";} $i++;?>">
      <div class="carousel-caption">
        <div class="thm-container">
          <div class="box valign-bottom">
            <div class="content text-center">
              <h1 class="title1" data-animation="animated fadeInUp"><?php the_title(); ?></h1>
              <p class="content1" data-animation="animated fadeInDown"><?php the_content(); ?></p><a data-animation="animated fadeInUp" href="<?php echo site_url('about-us'); ?>" class="view-all hvr-bounce-to-right slide_learn_btn">learn more</a><a data-animation="animated fadeInUp" href="<?php echo site_url('benefits'); ?>" class="view-all hvr-bounce-to-right slide_learn_btn slide_solution_btn">Benefits</a>
            </div>
          </div>
        </div>
      </div>
    </div>
       <?php   endwhile;wp_reset_postdata();?>
  </div>
  <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
</div>
    <!-- =========home banner end============-->
    <div class="var4_welcome var5_welcome full_width">
      <div class="container mtop40">
        <h3>We manufacture Inter-lock bricks</h3>
        <?php echo get_field('introduction'); ?>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">

             <div class="variation2_about_img full_width mbot35 center">
               <?php
               $id_image= get_field('brick1_image');
               $image= wp_get_attachment_image_src($id_image, 'brick');
               ?>
               <img class="bri" src="<?php echo $image[0]; ?>" alt="News Img2">
               </div>
               <div class="bric-des">
               <h4><?php echo get_field('brick1_title'); ?></h4>
               <p>Dimension : <?php echo get_field('brick1_dimension'); ?></p>
                </div>

             <div class="variation2_about_img full_width mbot35">
               <?php
               $id_image= get_field('brick2_image');
               $image= wp_get_attachment_image_src($id_image, 'brick');
               ?>
               <img class="bri" src="<?php echo $image[0]; ?>" alt="News Img2">
               </div>
               <div class="bric-des">
                 <h4><?php echo get_field('brick_2_title'); ?></h4>
                 <p>Dimension :<?php echo get_field('brick2_dimension') ?></p>
               </div>


          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prht30">
            	<div class='product_animation1' style="margin: auto; top: 40px;"></div>
              <div class="brick_desc bdes">
                <h4><?php echo get_field('rotating_brick_title'); ?></h4>
                <p class="text_center"><?php echo get_field('rotating_brick_content'); ?></p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========project col end============-->
    <div class="full_wrapper variation5_service padtb_91_109">
      <div class="container">
        <h3 class="fnt_white_color mbot25 blue_after">Benefits</h3>
        <p class="srv_fntgray mbot45"><?php echo get_field('how_its_made'); ?></p>
      </div>
      <?php
        $args=array(
          'post_type'=>'benefit',
          'posts_per_page'=>-1,
          'orderby'=>'title',
          'order'=>'ASC'
        );
        $makingprocesss= new WP_Query($args);
        while($makingprocesss->have_posts()):$makingprocesss->the_post();
       ?>
      <div class="var5_srvice_col">
        <div class="v5_service">
          <div class="var5_srvice_left_wdt service1_left_bg"><span class="var5_srvice_img">
            <?php
              $id_image= get_field('icon');
             $image= wp_get_attachment_image_src($id_image, '');
             ?>
             <img src="<?php echo $image[0]; ?>" alt=""></span>
            <div class="var5_srvice_txt">
              <h6><?php the_title(); ?></h6>
              <p class="white_color1"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p><a href="<?php echo the_permalink();?>" class="service_read">Read more</a>
            </div>
          </div>
          <div class="var5_srvice_left_wdt service1_rght_bg"
          <?php
          $id_image= get_field('benefit_listing_image');
          $image= wp_get_attachment_image_src($id_image, '');
          ?>
          style="background-image: url('<?php echo $image[0]; ?>');"></div>
        </div>
      </div>
      <?php  endwhile;wp_reset_postdata();?>

     <!--  <div class="var5_srvice_col">
        <div class="v5_service">
          <div class="var5_srvice_left_wdt service4_left_bg"></div>
          <div class="var5_srvice_left_wdt service4_rght_bg"><span class="var5_srvice_img"><img src="images/home_page_variation5/material_icon1_hover.png" alt=""></span>
            <div class="var5_srvice_txt">
              <h6>Power and energy</h6>
              <p class="white_color1">Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur adipisci quisquam est, qui dolorem quisquam est, qui dolorem</p><a href="#" class="service_read">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="var5_srvice_col">
        <div class="v5_service">
          <div class="var5_srvice_left_wdt service5_left_bg"><span class="var5_srvice_img"><img src="images/home_page_variation5/material_icon1_hover.png" alt=""></span>
            <div class="var5_srvice_txt">
              <h6>chemical research</h6>
              <p class="white_color1">Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur adipisci quisquam est, qui dolorem quisquam est, qui dolorem</p><a href="#" class="service_read">Read more</a>
            </div>
          </div>
          <div class="var5_srvice_left_wdt service5_rght_bg"></div>
        </div>
      </div> -->
    </div>
    <section class="animate-house">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h3 class="fnt_dark_color mtop40">Himalayan Brick House</h3>
              <?php echo get_field('house'); ?>
            <div class='product_animation_house'></div>
          </div>
        </div>
      </div>
    </section>
    <div class="full_wrapper padtb_95_100">
      <div class="container">
        <div class="row">
          <!-- =========core value col start============-->
          <!-- =========core value col end============-->
          <!-- =========testimonial col start============-->
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prht85">
            <h3 class="fnt_dark_color_s">About Us</h3>
            <div class="variation2_about_img full_width mbot35"><span class="first_img">
              <?php
                $id_image= get_field('abt_img1');
               $image= wp_get_attachment_image_src($id_image, 'abt1');
               ?>
               <img src="<?php echo $image[0]; ?>" alt=""></span><span class="second_img">
                 <?php
                   $id_image= get_field('abtimg2');
                  $image= wp_get_attachment_image_src($id_image, 'abt2');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt=""></span></div>
            <p class="var4_welcome_txt fnt20 mbot25"><?php echo get_field('about_us_content'); ?></p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prht85 col_margin">
            <h3 class="fnt_dark_color_s">How it's made</h3>
            <?php
              $args=array(
                'post_type'=>'choosingfeature',
                'posts_per_page'=>3,
                'orderby'=>'title',
                'order'=>'DES'
              );
              $choosingfeatures= new WP_Query($args);
              while($choosingfeatures->have_posts()):$choosingfeatures->the_post();
             ?>
            <div class="var5_choose_col1"><span class="var5_choose_col1_img"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></span>
              <div class="var5_choose_col1_desc">
                <h6><?php the_title(); ?></h6>
                <p><?php the_content(); ?></p>
              </div>
            </div>
                <?php  endwhile;wp_reset_postdata();?>
            </div>
          <!-- =========testimonial col end============-->
        </div>
      </div>
    </div>
    <div id="our_project" data-ride="carousel" class="full_wrapper variation5_projectbg padtb_91_0 carousel slide three_shows_one_move">
      <div class="container">
        <h3 class="fnt_white_color mbot25">Our Projects</h3>
        <?php echo get_field('project_introduction'); ?><br><br>
        <div class="controls pull-right mtop165"><a href="#our_project" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#our_project" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
      </div>
      <!-- Wrapper for slides-->
      <div class="carousel-inner">
        <?php
        $i=0;
        $args= array(
          'post_type'=>'project',
          'posts_per_page'=>-1,
          'orderby'=>'title',
          'order'=>'ASC'
        );
        $projects= new WP_Query($args);
        while($projects->have_posts()):$projects->the_post();
        ?>
        <div class="item <?php if($i==0) {echo "active";} $i++;?>">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 project_img pad_zero effect-goliath">
            <div class="shadow_effect black_overlay"><?php
          $id_image= get_field('listing_image');
          $image= wp_get_attachment_image_src($id_image,'project');
          ?>
          <img src="<?php echo $image[0]; ?>"  alt="Project1" class="img-responsive"></div>
            <div class="project_txt_btn"><a href="<?php echo the_permalink(); ?>" class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn">view project</a>
              <h6><?php the_title(); ?></h6>
            </div>
          </div>
        </div>
       <?php endwhile;wp_reset_postdata();?>
      </div>
    </div>
    <!-- =========latest-news col start============-->
    <div class="full_wrapper padtb_95_100">
      <div class="container">
        <h3 class="fnt_dark_color mbot35">Our Recognition</h3>
        <div class="row">
          <?php
          $i=0;
          $args= array(
            'post_type'=>'our_recognition',
            'posts_per_page'=>-1,
            'orderby'=>'title',
            'order'=>'DES'
          );
          $projects= new WP_Query($args);
          while($projects->have_posts()):$projects->the_post();
          ?>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="enitre_mouse">
              <div class="wdt_img news_img">
                <div class="shadow_effect effect-apollo mbot25"><img class="img-responsive"src="<?php echo the_post_thumbnail_url('services'); ?>" alt="News Img1"></div>
              </div>
              <h5 class="line_heig26 letter_spac0 mbot10 mtopminus5 fnt_black_color"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p class="mbot10"><?php the_content(); ?></p>
            </div>
          </div>
          <?php endwhile;wp_reset_postdata();?>
        </div>
      </div>
    </div>
    <!-- =========latest-news col end============-->
    <section class="full_wrapper brand-section">
      <div class="container">
          <div class="brand-carousel owl-carousel owl-theme">
            <?php
              $args=array(
                'post_type'=>'brand',
                'posts_per_page'=>-1,
                'orderby'=>'title',
                'order'=>'ASC'
              );
              $brands= new WP_Query($args);
              while($brands->have_posts()):$brands->the_post();
             ?>
              <div class="item">
                  <img src="<?php the_post_thumbnail_url(); ?>"/>
              </div><!-- /.item -->
              <?php  endwhile;wp_reset_postdata();?>
          </div><!-- /.brand-carousel -->
      </div><!-- /.container -->
    </section><!-- /.brand-section -->
   <?php
   get_footer();
    ?>
