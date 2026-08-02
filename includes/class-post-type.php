<?php
if(!defined('ABSPATH')) exit;
class SPG_Post_Type{
 public function __construct(){add_action('init',[$this,'register']);}
 public function register(){
  register_post_type('spg_submission',[
   'labels'=>['name'=>'Garden Submissions','singular_name'=>'Garden Submission'],
   'public'=>false,'show_ui'=>true,
   'menu_icon'=>'dashicons-format-gallery',
   'supports'=>['title']
  ]);
 }
}
