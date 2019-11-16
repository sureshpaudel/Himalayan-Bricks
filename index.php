<?php
//Template Name:News page
get_header(); ?>
<section class="inner-banner"style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
        <div class="thm-container">
            <h2>News</h2>
            <div class="breadcumb">
                <a href="<?php echo home_url('/') ;?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>News</span>
            </div><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </section>
    <!-- =========inner-page banner end============-->
    <!-- =========inner-pages medium content start============-->
    <div class="full_wrapper padtb_100_95">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="full_width mbot45">
              <?php get_sidebar(); ?>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
            <div class="plft30">
              <?php
                $args=array(
                  'post_type'=>'post',
                  'orderby'=>'title',
                  'order'=>'ASC'
                );
                $posts= new WP_Query($args);
                while($posts->have_posts()):$posts->the_post();
               ?>
              <div class="full_width mbot80">
                <div class="wdt_img news_img shadow_effect effect-apollo"><a href="news_detail.php"><?php
							$id_image= get_field('blog-image');
							$image= wp_get_attachment_image_src($id_image, 'news');
							?>
							<img src="<?php echo $image[0]; ?>" alt="news1"><span class="news_Date news_Date1"><span><?php echo get_the_date('j'); ?> <?php echo get_the_date('M'); ?>, <?php echo get_the_date('Y'); ?></span></span></a></div>
                <ul class="blog_icon_list">
                  <li class="blog-user_icon">By :  <?php the_author(); ?></li>

                </ul>
                <h3 class="fnt_25 mbot20 news_head no_after"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="mbot25 gray_color1"><?php echo wp_trim_words( get_the_content(), 60, '...' );?></p><a href="<?php echo the_permalink(); ?>" class="view-all hvr-bounce-to-right news_read_btn">Read more</a>
              </div>
            <?php  endwhile;wp_reset_postdata();?>
              <div aria-label="Page navigation">
                <?php echo paginate_links(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
