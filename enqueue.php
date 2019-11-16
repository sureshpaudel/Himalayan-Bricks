<?php
  function Himalayan_styles(){
      wp_register_style('custom_css', get_template_directory_uri(). '/style.css');
      wp_register_style('bootstrap_css', get_template_directory_uri(). '/css/bootstrap.min.css');
      wp_register_style('style_css', get_template_directory_uri(). '/css/style.css');
      wp_register_style('animate_css', get_template_directory_uri(). '/css/animate.min.css');
      wp_register_style('fontawesome_css', get_template_directory_uri(). '/css/font-awesome.min.css');
      wp_register_style('owl_css', get_template_directory_uri(). '/plugins/owl.carousel-2/assets/owl.carousel.css');
      wp_register_style('owltheme_css', get_template_directory_uri(). '/plugins/owl.carousel-2/assets/owl.theme.default.min.css');

      wp_enqueue_style('custom_css');
      wp_enqueue_style('bootstrap_css');
      wp_enqueue_style('style_css');
      wp_enqueue_style('animate_css');
      wp_enqueue_style('fontawesome_css');
      wp_enqueue_style('owl_css');
      wp_enqueue_style('owltheme_css');

      wp_register_script('touchswipe_js',get_template_directory_uri().'/js/jquery.touchSwipe.min.js', array('jquery'),false, true);
      wp_register_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),false, true);
      wp_register_script('owl_js',get_template_directory_uri().'/plugins/owl.carousel-2/owl.carousel.min.js', array('jquery'),false, true);
      wp_register_script('responsive_js',get_template_directory_uri().'/js/responsive_bootstrap_carousel.js', array('jquery'),false, true);
      wp_register_script('custom_js',get_template_directory_uri().'/js/custom.js', array('jquery'),false, true);
      wp_register_script('theme_js',get_template_directory_uri().'/js/theme.js', array('jquery'),false, true);
      wp_register_script('spritespin_js',get_template_directory_uri().'/js/spritespin.js', array('jquery'),false, true);
      wp_register_script('homepage_js',get_template_directory_uri().'/js/homepage5.js', array('jquery'),false, true);

      wp_enqueue_script('jquery');
      wp_enqueue_script('touchswipe_js');
      wp_enqueue_script('bootstrap_js');
      wp_enqueue_script('owl_js');
      wp_enqueue_script('responsive_js');
      wp_enqueue_script('custom_js');
      wp_enqueue_script('theme_js');
      wp_enqueue_script('spritespin_js');
      wp_enqueue_script('homepage_js');

}
add_action('wp_enqueue_scripts','Himalayan_styles');
?>
