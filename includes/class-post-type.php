<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SPG_Post_Type {

	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	public function register() {

		$labels = array(
			'name'               => 'Garden Gallery',
			'singular_name'      => 'Garden Submission',
			'menu_name'          => 'Garden Gallery',
			'add_new'            => 'Add Submission',
			'add_new_item'       => 'Add New Submission',
			'edit_item'          => 'Edit Submission',
			'new_item'           => 'New Submission',
			'view_item'          => 'View Submission',
			'search_items'       => 'Search Submissions',
			'not_found'          => 'No submissions found',
			'not_found_in_trash' => 'No submissions found in Trash',
		);

		$args = array(

			'labels' => $labels,

			'public' => false,

			'show_ui' => true,

			'show_in_menu' => false,

			'supports' => array(
				'title'
			),

			'capability_type' => 'post'

		);

		register_post_type(
			'spg_submission',
			$args
		);

	}
}