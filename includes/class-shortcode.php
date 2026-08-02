<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SPG_Shortcode {

	public function __construct() {
		add_shortcode( 'spg_upload_form', array( $this, 'upload_form' ) );
	}

	public function upload_form() {

		ob_start();

		include SPG_PLUGIN_PATH . 'templates/upload-form.php';

		return ob_get_clean();

	}

}