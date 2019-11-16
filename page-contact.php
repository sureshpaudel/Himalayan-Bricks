<?php
//Template Name: Contact Page
get_header();
 ?>
 <section class="inner-banner"style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="thm-container">
       <h2>Contact Us</h2>
         <div class="breadcumb">
           <a href="<?php echo home_url('/') ;?>">Home</a>
             <i class="fa fa-angle-right"></i>
             <span>Contact Us</span>
         </div><!-- /.breadcumb -->
       </div><!-- /.thm-container -->
     </section>
     <!-- =========inner-page banner end============-->
     <!-- =========inner-pages medium content start============-->
     <div class="full_wrapper padtb_92_100">
       <div class="container">
         <h3 class="mbot25">Get In Touch</h3>
         <p class="mbot45"><?php echo get_field('contact_form_intro'); ?></p>
         <div class="row">
           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center">
             <?php echo do_shortcode('[caldera_form id="CF5d90760e98521"]') ?>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 plft85 col_margin">
             <ul class="contact_info">
               <li class="cnt_map_icon">
                 <p class="line_he2"><?php echo get_field('location'); ?></p>
               </li>
               <li class="cnt_mail_icon">
                 <p class="line_he2"><?php echo get_field('email_address'); ?></p>
               </li>
               <li class="cnt_call_icon">
                 <p class="line_he2"><?php echo get_field('phone'); ?></p>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div class="full_width contact_map">
       <iframe src="<?php echo get_field('navigation_map'); ?>" width="600" height="450" style="border:0" allowfullscreen=""></iframe> </div>

 <?php get_footer(); ?>
