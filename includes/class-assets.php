<?php
if(!defined('ABSPATH')) exit;
class SPG_Assets{
 public function __construct(){
  add_action('wp_enqueue_scripts',[$this,'load']);
 }
 public function load(){
  wp_enqueue_style('spg-gallery',SPG_PLUGIN_URL.'assets/css/gallery.css',[],SPG_VERSION);
  wp_enqueue_script('spg-gallery',SPG_PLUGIN_URL.'assets/js/gallery.js',['jquery'],SPG_VERSION,true);
 }
}
