<footer class="full_width">
    <div class="footer-cta">
        <div class="container">
            <div class="pull-left left-text">
                <h3>
                    <?php echo get_field('quote_content',7); ?>
                </h3>
            </div><!-- /.pull-left left-text -->
            <div class="pull-right btn-box">
                <a href="<?php echo site_url('contact-us'); ?>" class="cta-btn">Contact Us</a>
            </div><!-- /.pull-right -->
        </div><!-- /.container -->
    </div><!-- /.footer-cta -->
    <!-- Footer_Container Start-->
    <div class="ftr_mid full_width padtb_81_30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr_txt_div mbot30">
                    <?php
                $id_image= get_field('logo_image',7);
               $image= wp_get_attachment_image_src($id_image, 'logo');
               ?>
                    <img src="<?php echo $image[0]; ?>" alt="footer logo">
                    <p>
                        <?php echo get_field('footer_content',7); ?>
                    </p><a href="<?php echo site_url('about-us'); ?>" class="ftr_readmore">Read More</a>
                    <div class="ftr_social">
                        <a href="<?php echo get_field('fb_link',7); ?>"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                        <a href="<?php echo get_field('twtr_link',7); ?>"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                        <a href="<?php echo get_field('google_link',7); ?>"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
                        <a href="<?php echo get_field('linkdlin_link',7); ?>"><i aria-hidden="true" class="fa fa-linkedin"></i></a></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mbot30 service_link_desk">
                    <div class="plft30">
                        <h6>Our Benefits</h6>
                        <ul class="ftr_nav">
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
                            <li class=""><a class="<?php if($currentId==get_the_ID()){echo 'active_color';} ?>" href="<?php the_permalink(); ?>">
                                    <?php echo the_title();?></a></li>
                            <?php  endwhile;wp_reset_postdata();?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mbot30 quick_link_mob">
                    <h6>Quick Links</h6>
                    <ul class="ftr_nav">
                        <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('contact-us'); ?>">Get Quote</a></li>
                        <li><a href="<?php echo site_url('about-us'); ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('post'); ?>">News</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mbot30 service_link_mob">
                    <div class="plft30">
                        <h6>Our Benefits</h6>
                        <ul class="ftr_nav">
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
                            <li class=""><a class="<?php if($currentId==get_the_ID()){echo 'active_color';} ?>" href="<?php the_permalink(); ?>">
                                    <?php echo the_title();?></a></li>
                            <?php  endwhile;wp_reset_postdata();?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mbot30 quick_link_desk">
                    <h6>Quick Links</h6>
                    <ul class="ftr_nav">
                        <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('contact-us'); ?>">Get Quote</a></li>
                        <li><a href="<?php echo site_url('about-us'); ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('recognition'); ?>">Recognitions</a></li>
                        <li><a href="<?php echo site_url('benefits'); ?>">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mbot30 get_touch">
                    <h6>Get In Touch</h6>
                    <ul class="ftr_nav get_in_touch">
                        <li class="ftr_location_icon"><span class="txt-big">
                                <?php echo get_field('location',7); ?>
                        </li>
                        <li class="ftr_phn_icon">
                            <?php echo get_field('phone',7); ?>
                        </li>
                        <li class="ftr_msg_icon">
                            <?php echo get_field('email',7); ?>
                        </li>
                        <li class="ftr_clock_icon">
                            <?php echo get_field('time',7); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer_Container End-->
    <!-- Copyright Start-->
    <div class="ftr_btm full_width">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 txt_center">
                    <p>Copyright © 2019 Himalayan Bricks. All rights reserved. </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 text-right txt_center">
                    <p>Created by: <a href="https://nextaussietech.com">NAT</a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End-->
</footer>
<!-- =========footer end============-->
<div class="search_overlay vari_5_search"><a href="javascript:void(0)" class="close_search"> </a>
    <div class="search_main_container">
        <h4>Search</h4>
        <form method="get" action="<?php bloginfo('url') ?>">
            <input type="search" placeholder="Search..." class="search_lightbox_input" value="<?php the_search_query();  ?>" name="s" id="s">
            <input type="button" class="search_lghtbox_btn" value="submit">
        </form>
    </div>
</div>
<script>
$ = jQuery.noConflict();
</script>
<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 120) {
        $('.nav_col').removeClass('slideIn animated');
        $('.nav_col').addClass("sticky_header slideInDown animated");
    } else {
        $('.nav_col ').removeClass('sticky_header slideInDown animated');
        $('.nav_col ').addClass('slideIn animated');
    }
});
</script>
<script type="text/javascript">
(function($) {
    "use strict"
    // Accordion Toggle Items
    var iconOpen = 'fa fa-minus',
        iconClose = 'fa fa-plus';
    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function(e) {
        var $target = $(e.target);
        $target.siblings('.accordion-heading').find('em').toggleClass(iconOpen + ' ' + iconClose);
        if (e.type == 'show') {
            jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
            jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
            jQuery('#accordion2 .accordion-toggle').removeClass('active');
            jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
            $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
            $target.prev('.accordion-group').find('.accordion-body.collapse').addClass('in');
            $target.siblings('.accordion-heading').find('em').addClass('fa-minus');
            $target.siblings('.accordion-heading').find('em').removeClass('fa-plus');
        }
        if (e.type == 'hide') {
            jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
            jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
            jQuery('#accordion2 .accordion-toggle').removeClass('active');
            jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
            $(this).find('.accordion-toggle').not($target).removeClass('active');
            $target.siblings('.accordion-heading').find('em').addClass('fa-plus');
            $target.siblings('.accordion-heading').find('em').removeClass('fa-minus');
        }
    });
})(jQuery);
</script>
<!--  <script type="text/javascript">
$(function(){
var frames = [
"images/img1.png",
"images/img2.png",
];
$(".product_animation").spritespin({
width : 500,
height: 327,
frames: frames.length,
behavior: "drag", // "hold"
module: "360",
sense : -1,
source: frames,
animate : true,
loop: true,
frameWrap : true,
frameStep : 1,
frameTime : 60,
retainAnimate : true,
enableCanvas :true
});

});
</script> -->
<script>
$(function() {
    $('.product_animation').spritespin({
        source: SpriteSpin.sourceArray('<?php echo get_template_directory_uri(); ?>/images/brick/b{frame}.png', { frame: [1, 25], digits: 4 }),
        width: 500,
        height:200,

        plugins: [
            'progress',
            '360',
            'drag',
            //'blur',
        ],
        sense: 1,
        animate: true,
        loop: true,
        frameWrap: false,
        frameStep: 50,
        frameTime: 40,
        retainAnimate: true,
        enableCanvas: false,
    });
});
</script>
<script>
$(function() {
    $('.product_animation1').spritespin({
        source: SpriteSpin.sourceArray('<?php echo get_template_directory_uri(); ?>/images/brick/b{frame}.png', { frame: [1, 25], digits: 4 }),
        width: 500,
        height: 200,

        plugins: [
            'progress',
            '360',
            'drag',
            //'blur',
        ],
        sense: 1,
        animate: true,
        loop: true,
        frameWrap: false,
        frameStep: 50,
        frameTime: 340,
        retainAnimate: true,
        enableCanvas: false,

    });
});
</script>
<script>
$(function() {
    $('.product_animation_house').spritespin({
        source: SpriteSpin.sourceArray('<?php echo get_template_directory_uri(); ?>/images/house/w{frame}.png', { frame: [0, 100], digits: 4 }),
        width: 1100,
        height: 550,

        plugins: [
            'progress',
            '360',
            'drag',
            //'blur',
        ],
        sense: -1,
        animate: true,
        loop: true,
        frameWrap: false,
        frameStep: 50,
        frameTime: 600,
        retainAnimate: true,
        enableCanvas: false,
    });
});
</script>

<!-- /********Gallery*********/ -->
<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
</body>

</html>
