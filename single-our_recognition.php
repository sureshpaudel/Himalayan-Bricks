<?php
//template name:Benefits Page template
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
     <div class="full_wrapper padtb_100_95">
           <div class="container">
             <div class="row">
               <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                 <div class="full_width mbot30">
                   <h3 class="fnt_25 mbot15">Contact Info</h3>
                   <p class="line_he2 mbot8">
                     <?php echo the_field('contact_detail'); ?>
                   </p>
                 </div>
               </div>
               <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
                 <div class="">
                   <div class="mbot80">
                     <div class="text-center">
                       <?php
                       $id_image= get_field('recognition_image');
         							$image= wp_get_attachment_image_src($id_image,'');
         							?>
         							<img class="rec-img img-responsive" src="<?php echo $image[0]; ?>" alt="recog1">
                    </div><br>
                    <div class="details">
                     <h3><?php the_title(); ?></h3>
                     <p><?php echo the_field('recognition_detail'); ?></p>
                       </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
   <?php endwhile; ?>
    <?php get_footer(); ?>
