<?php
//template name:Specification Page template
get_header();
 ?>
 <?php while (have_posts()):the_post();
  ?>
 <section class="inner-banner"style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
         <div class="thm-container">
             <h2><?php the_title(); ?></h2>
             <div class="breadcumb">
                 <a href="<?php echo home_url('/') ;?>">Home</a>
                 <i class="fa fa-angle-right"></i>
                 <span><?php the_title(); ?></span>
             </div><!-- /.breadcumb -->
         </div><!-- /.thm-container -->
     </section><!-- /.inner-banner -->

     <div class="container">
       <div class="weight mtop40">
         <h3>Weight Comparision</h3>
         <p><?php echo get_field('weight_comparison_content'); ?></p>
         <?php
           $id_image= get_field('weight_comparison_photo');
          $image= wp_get_attachment_image_src($id_image, '');
          ?>
          <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="sp1">
       </div>
       <div class="weight">
         <h3>Cost Comparision</h3>
         <p><?php echo get_field('cost_comparision_content'); ?> </p>
         <?php
           $id_image= get_field('cost_comparison_photo');
          $image= wp_get_attachment_image_src($id_image, '');
          ?>
          <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="sp1">
       </div>
       <div class="weight">
         <h3>Compressive Test Report</h3>
         <p><?php echo get_field('comparison_test_report_content'); ?></p>
         <?php
           $id_image= get_field('comparison_test_report_image');
          $image= wp_get_attachment_image_src($id_image, '');
          ?>
          <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="sp1">
       </div>
     </div>

     <div class="container mbot25 fnt_25 mtop40">
       <div class="full_width">
                   <h3 class="fnt_25 mbot25">Construction Manual</h3>
                   <p><?php echo get_field('sqm-training-content'); ?></p>
                   <?php if( get_field('download_sqm_file') ): ?>
                   <a class="download_brochure1 hvr-bounce-to-right"href="<?php the_field('download_sqm_file'); ?>">Download File</a>
                   <?php endif; ?>
                </div>
      </div>
    </div>


   <?php endwhile; ?>
    <?php get_footer(); ?>
