<?php get_header(); ?>
<?php while (have_posts()):the_post();
  ?>
<section class="inner-banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="thm-container">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="breadcumb">
            <a href="<?php echo home_url('/') ;?>">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>
                <?php the_title(); ?></span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section>
<!-- =========inner-page banner end============-->
<!-- =========inner-pages medium content start============-->
<div class="full_wrapper padtb_100_100">
    <div class="container">
        <div class="row case_study_col">
            <div class="col-lg-6 col-md-6 col-sm-12 col-cs-12"><span class="shadow_effect effect-apollo case_study_img mbot45">
                    <?php
        $id_image= get_field('project_img1');
        $image= wp_get_attachment_image_src($id_image, 'project');
        ?>
                    <img src="<?php echo $image[0]; ?>" alt="image" class="zoom_img_effect"></span></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-cs-12"><span class="shadow_effect effect-apollo case_study_img mbot45">
                    <?php
        $id_image= get_field('project_img2');
        $image= wp_get_attachment_image_src($id_image, 'project');
        ?>
                    <img src="<?php echo $image[0]; ?>" alt="image" class="zoom_img_effect"></span></div>
        </div>
        <ul class="project_startlist">
            <li>
                <h4>Project Starting Date</h4>
                <p>
                    <?php echo get_field('project_start_date'); ?>
                </p>
            </li>
            <li>
                <h4>Project End</h4>
                <p>
                    <?php echo get_field('project_end_date'); ?>
                </p>
            </li>
            <li>
                <h4>Category</h4>
                <p>
                    <?php echo get_field('category'); ?>
                </p>
            </li>
        </ul>
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
