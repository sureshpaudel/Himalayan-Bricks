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
     <!-- =========inner-page banner end============-->
     <!-- =========inner-pages medium content start============-->
     <div class="full_wrapper padtb_96_20">
       <div class="container">
         <h3 class="mbot25 fnt_dark_color">Our Benefits</h3>
         <p><?php the_content();?></p>
         <div class="row">
           <?php
                    $args=array(
                      'post_type'=>'benefit',
                      'posts_per_page'=>-1,
                      'orderby'=>'title',
                      'order'=>'ASC'
                    );
                    $benefits= new WP_Query($args);
                    while($benefits->have_posts()):$benefits->the_post();
                   ?>
                   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 enitre_mouse mbot75 mtop40">
                     <div class="shadow_effect effect-apollo mbot25"><a href="<?php echo the_permalink(); ?>">
                      <?php
                 $id_image= get_field('benefit_listing_image');
   							$image= wp_get_attachment_image_src($id_image, 'services');
   							?>
   							<img src="<?php echo $image[0]; ?>" alt="Material" class="img-responsive"></a></div>
             <h4 class="mbot10"><?php the_title(); ?></h4>
             <p class="mbot12 line_he2"><?php echo wp_trim_words( get_the_content(), 16, '...' );?></p><a href="<?php echo the_permalink(); ?>" class="read_more">Read more</a>
           </div>
         <?php endwhile; wp_reset_postdata(); ?>
         </div>
       </div>
     </div>
<?php endwhile; ?>
 <?php get_footer(); ?>
