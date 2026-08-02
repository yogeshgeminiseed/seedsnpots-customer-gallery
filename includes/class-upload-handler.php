<?php
if(!defined('ABSPATH')) exit;
class SPG_Upload_Handler{
 public function __construct(){
  add_action('init',[$this,'handle']);
 }
 public function handle(){
  if(empty($_POST['spg_submit'])||!isset($_POST['spg_nonce'])) return;
  if(!wp_verify_nonce($_POST['spg_nonce'],'spg_submit')) return;
  wp_insert_post([
   'post_type'=>'spg_submission',
   'post_status'=>'pending',
   'post_title'=>sanitize_text_field($_POST['spg_name'])
  ]);
  wp_safe_redirect(add_query_arg('spg','success',wp_get_referer()));
  exit;
 }
}
