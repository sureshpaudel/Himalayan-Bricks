<?php
//Template Name:About-Us page
get_header();
 ?>
 <section class="inner-banner"style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
         <div class="thm-container">
             <h2>About Us</h2>
             <div class="breadcumb">
                 <a href="<?php echo home_url('/') ;?>">Home</a>
                 <i class="fa fa-angle-right"></i>
                 <span>About Us</span>
             </div><!-- /.breadcumb -->
         </div><!-- /.thm-container -->
     </section><!-- /.inner-banner -->
     <!-- =========inner-page banner end============-->
     <!-- =========inner-pages medium content start============-->
     <div class="full_wrapper padtb_100_100">
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12"><span class="wdt_img img_100">
             <?php
             $id_image= get_field('intro_image');
             $image= wp_get_attachment_image_src($id_image, 'about_intro');
             ?>
             <img src="<?php echo $image[0]; ?>" alt="About Img" class="img-responsive"></span></div>
           <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col_margin">
             <div class="plft50">
               <?php echo get_field('page_introduction'); ?>
               <a href="<?php echo site_url('contact'); ?>" class="view-all hvr-bounce-to-right news_read_btn get_Quote">Get Quote</a><a href="<?php echo site_url('benefits'); ?>" class="view-all hvr-bounce-to-right news_read_btn get_Quote view_service">Our Benefits</a>
               <div class="full_width">
            </div>

             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="full_width about_award_bg"
     <?php
     $id_image= get_field('award_bg_img');
     $image= wp_get_attachment_image_src($id_image, '');?>
     style="background-image: url(<?php echo $image[0]; ?>">
       <div class="container">
         <div class="row">
           <!-- =========award-winning col start============-->
           <!-- <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 award_bg plft15">
             <?php
           $id_image= get_field('award_side_image');
           $image= wp_get_attachment_image_src($id_image, '');
           ?>
           <img src="<?php echo $image[0]; ?>"
              alt="Award Img"></div> -->
           <!-- =========award-winning col end============-->
           <!-- =========request-consultant col start============-->
           <!-- <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 fr">
             <div class="row award_pad">
               <?php
                 $args=array(
                   'post_type'=>'award',
                   'posts_per_page'=>4,
                   'orderby'=>'title',
                   'order'=>'ASC'
                 );
                 $awards= new WP_Query($args);
                 while($awards->have_posts()):$awards->the_post();
                ?>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbot70">
                 <div class="row">
                   <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="award"></div>
                   <div class="col-lg-9 col-md-8 col-sm-10 col-xs-10">
                     <h4 class="letter_space_0 white_color"><?php the_title(); ?></h4>
                     <p class="letter_spac0 lyt_color"><?php the_content(); ?> </p>
                   </div>
                 </div>
               </div>
             <?php endwhile; wp_reset_postdata(); ?>
             </div>
           </div> -->
           <!-- =========request-consultant col end============-->
         </div>
       </div>
     </div>
     <div class="full_wrapper speciality_bg padtb_95_100">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <h3 class="fnt_24 mbot15 letter_spac0">Our Sepcility</h3>
             <?php echo get_field('our_speciality'); ?>
           </div>
           <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12"></div>
           <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
             <ul class="special_no">
               <?php
                 $args=array(
                   'post_type'=>'counter',
                   'posts_per_page'=>4,
                   'orderby'=>'title',
                   'order'=>'ASC'
                 );
                 $counters= new WP_Query($args);
                 while($counters->have_posts()):$counters->the_post();
                ?>
               <li><span class="number"><?php the_content(); ?></span><span class="txt"><?php the_title(); ?></span></li>
             <?php endwhile;wp_reset_postdata(); ?>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div class="full_wrapper padtb_95_100 team-member-about-us">
       <div class="container">
         <h3 class="mbot40">Our Team</h3>
         <div class="row">
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
             <p><?php echo get_field('workers_intro'); ?></p>
           </div>
           <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin">
             <div id="our_worker" data-ride="carousel" class="carousel slide four_shows_one_move">
               <div class="controls pull-right"><a href="#our_worker" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#our_worker" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
               <!-- Wrapper for slides-->
               <div class="row">
                 <div class="carousel-inner">
                   <?php
               $i=0;
                 $args= array(
                'post_type'=>'workers',
                'posts_per_page'=>-1,
                'orderby'=>'title',
                'order'=>'ASC'
                );
               $workers= new WP_Query($args);
               while($workers->have_posts()):$workers->the_post();
               ?>
               <div class="item <?php if($i==0) {echo "active";} $i++;?>
               ">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                       <div class="dedicated-team-img-holder mbot15">
                         <div class="shadow_effect effect-apollo"><img src="<?php the_post_thumbnail_url(); ?>" alt="team1"></div>
                         <div class="overlay">
                           <div class="inner-holder">
                             <ul>
                               <li><a href="<?php echo get_field('facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="<?php echo get_field('twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="<?php echo get_field('linkdin_link'); ?>"><i class="fa fa-linkedin"></i></a></li>
                               <li><a href="<?php echo get_field('google_link'); ?>"><i class="fa fa-google-plus"></i></a></li>
                             </ul>
                           </div>
                         </div>
                       </div><span class="team_name full_width"><?php the_title(); ?></span><span class="team_designation full_width"><?php the_content(); ?></span>
                     </div>
                   </div>
                <?php   endwhile;wp_reset_postdata();?>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- =========inner-pages medium content end============-->
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
 <?php get_footer(); ?>
