<?php get_header(); ?>
<?php while (have_posts()):the_post();
  ?>
  <section class="inner-banner"style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="thm-container">
              <h2>News Details</h2>
              <div class="breadcumb">
                  <a href="<?php echo home_url('/') ;?>">Home</a>
                  <i class="fa fa-angle-right"></i>
                  <span>News</span>
                  <i class="fa fa-angle-right"></i>
                  <span>News Details</span>
              </div><!-- /.breadcumb -->
          </div><!-- /.thm-container -->
      </section>
      <!-- =========inner-page banner end============-->
      <!-- =========inner-pages medium content start============-->
      <div class="full_wrapper padtb_100_100">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
              <div class="full_width mbot45">
                  <?php get_sidebar(); ?>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
              <div class="plft30">
                <div class="full_width">
                  <div class="wdt_img news_img shadow_effect effect-apollo">
                    <?php
                    $id_image= get_field('blog-image');
      							$image= wp_get_attachment_image_src($id_image, 'news');
      							?>
      							<img src="<?php echo $image[0]; ?>" alt="news1"><span class="news_Date news_Date1"><span><?php echo get_the_date('j'); ?> <?php echo get_the_date('M'); ?>, <?php echo get_the_date('Y'); ?></span></span></div>
                  <ul class="blog_icon_list">
                    <li class="blog-user_icon">By : <?php the_author(); ?></li>
                  </ul>
                  <h3 class="fnt_25 mbot20 news_head no_after"><?php the_title(); ?></h3>
                  <p class="mbot25 gray_color1"><?php the_content(); ?></p>
                </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
<?php get_footer(); ?>
