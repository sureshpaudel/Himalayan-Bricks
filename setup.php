<?php
function Himalayan_setup_theme(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_image_size('news',840,360,true);
  add_image_size('services',370,190,true);
  add_image_size('about_intro',370,493,true);
  add_image_size('award',725,512,true);
  add_image_size('project_list',480,320,true);
  add_image_size('project',570,346,true);
  add_image_size('servdetail',249,219,true);
  add_image_size('abt1',300,168,true);
  add_image_size('abt2',190,167,true);
  add_image_size('logo',65,50,true);
  add_image_size('recogdetail',550,700,true);
  add_image_size('brick',320,180,true);
  add_image_size('gallery',380,280,true);
  add_image_size('project',337,210,true);
}
add_action('after_setup_theme', 'Himalayan_setup_theme');
 ?>
