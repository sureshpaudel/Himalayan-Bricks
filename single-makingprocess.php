<?php get_header(); ?>
<?php while (have_posts()):the_post();
 $currentId = get_the_ID();
  ?>
<section class="inner-banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="thm-container">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="breadcumb">
            <a href="<?php echo home_url('/') ;?>">Home</a>
            <i class="fa fa-angle-right"></i>
            <span><?php the_title(); ?></span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->
<!-- =========inner-page banner end============-->
<!-- =========inner-pages medium content start============-->
<div class="full_wrapper padtb_100_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="full_width mbot50">
                    <ul class="service_nav">
                        <li><a href="<?php echo site_url('service'); ?>">All Services</a></li>
                        <?php
                                $args=array(
                                  'post_type'=>'makingprocess',
                                  'posts_per_page'=>-1,
                                  'orderby'=>'title',
                                  'order'=>'ASC'
                                );
                                $services= new WP_Query($args);
                                while($services->have_posts()):$services->the_post();
                               ?>
                        <li class=""><a class="<?php if($currentId==get_the_ID()){echo 'active_color';} ?>" href="<?php the_permalink(); ?>">
                                <?php echo the_title();?></a></li>
                        <?php  endwhile;
                        wp_reset_postdata();?>
                    </ul>
                </div>
                <div class="full_width mbot45">
                    <h3 class="fnt_25 mbot15">Contact Info</h3>
                    <p class="line_he2 mbot8">
                        <?php echo get_field('contact_info'); ?>
                    </p>
                </div>
                <div class="full_width">
                    <h3 class="fnt_25 mbot25">Brochure</h3>
                    <div class="download_brochure hvr-bounce-to-right"><a href="#">Download Brochure</a></div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
                <div class="plft30">
                    <div class="full_width mbot45"><span class="wdt_img material_servicefirst_img mrht30 shadow_effect effect-apollo">
                      <?php
                 $id_image= get_field('feature_img1');
   							 $image= wp_get_attachment_image_src($id_image, 'services');
   							?>
                            <img src="<?php echo $image[0]; ?>" alt="Agriculture1"></span><span class="wdt_img material_servicesecond_img shadow_effect effect-apollo">
                            <?php
                    $id_image= get_field('feature_img2');
                   $image= wp_get_attachment_image_src($id_image, 'services');
                   ?>
                            <img src="<?php echo $image[0]; ?>" alt="Agriculture2"></span></div>
                    <div class="full_width mbot45">
                        <h4 class="fnt_28 mbot15">
                            <?php the_title(); ?>
                        </h4>
                        <p class="mbot25 gray_color1">
                            <?php the_content(); ?>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                        <div class="dedicated-team-img-holder mbot15">
                            <div class="shadow_effect effect-apollo">
                                <?php
                     $id_image= get_field('img1');
       							$image= wp_get_attachment_image_src($id_image, 'servdetail');
       							?>
                                <img src="<?php echo $image[0]; ?>" alt="team1"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                        <div class="dedicated-team-img-holder mbot15">
                            <div class="shadow_effect effect-apollo">
                                <?php
                     $id_image= get_field('img2');
       							$image= wp_get_attachment_image_src($id_image, 'servdetail');
       							?>
                                <img src="<?php echo $image[0]; ?>" alt="team1"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
                        <div class="dedicated-team-img-holder mbot15">
                            <div class="shadow_effect effect-apollo">
                                <?php
                     $id_image= get_field('img3');
       							$image= wp_get_attachment_image_src($id_image, 'servdetail');
       							?>
                                <img src="<?php echo $image[0]; ?>" alt="team1"></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-first accordion-first1 clearfix">
                    <div id="accordion2" class="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" class="accordion-toggle collapsed"><em class="icon-fixed-width fa fa-plus"></em>
                                    <?php echo get_field('accord_title1'); ?></a></div>
                            <div id="collapseOne" style="height: 0px;" class="accordion-body collapse">
                                <div class="accordion-inner accordion-inner1">
                                  <p>
                                    <?php echo get_field('accord_content1'); ?>
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" class="accordion-toggle collapsed"><em class="icon-fixed-width fa fa-plus"></em>
                                    <?php echo get_field('accord_title2'); ?></a></div>
                            <div id="collapseTwo" style="height: 0px;" class="accordion-body collapse">
                                <div class="accordion-inner accordion-inner1">
                                    <p>
                                        <?php echo get_field('accord_content2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" class="accordion-toggle collapsed"><em class="icon-fixed-width fa fa-plus"></em>
                                    <?php echo get_field('accoord_title3'); ?></a></div>
                            <div id="collapseThree" style="height: 0px;" class="accordion-body collapse">
                                <div class="accordion-inner accordion-inner1">
                                    <p>
                                        <?php echo get_field('accord_content3'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
