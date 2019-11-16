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
<div class="row">
  <div class="col-md-12 d-flex justify-content-center mtop30 mbot30">
    <?php
        $args = array(
        'taxonomy' => 'gallery_category',
        'hide_empty' => true,
        'orderby'=>'date',
        'order'=>'DES'
        );
        $terms = get_terms($args);
     ?>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="All">All</button>
    <?php foreach ($terms as $term) { ?>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="<?php echo $term->slug ?>"><?php echo $term->name ?></button>
  <?php } wp_reset_query();  ?>
  </div>
</div>
<div class="gallery" id="gallery">
  <?php
      $args = array(
     'post_type' => 'gallery',
     'posts_per_page' => -1,
    );
    $gallerys = new WP_Query($args);
    while($gallerys->have_posts()) : $gallerys->the_post();
    $category = get_the_terms( get_the_ID(), 'gallery_category' );
  ?>
  <div class="mb-3 pics animation All <?php echo $category[0]->slug; ?>">
    <img class="img-fluid" src="<?php echo the_post_thumbnail_url('gallery') ?>" alt="Card image cap">
  </div>
<?php endwhile; wp_reset_query(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
