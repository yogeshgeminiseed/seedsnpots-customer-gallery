<?php
if(!defined('ABSPATH')) exit;
class SPG_Shortcode{
 public function __construct(){ add_shortcode('spg_upload_form',[$this,'render']);}
 public function render(){
  ob_start();
  include SPG_PLUGIN_PATH.'templates/upload-form.php';
  return ob_get_clean();
 }
}
