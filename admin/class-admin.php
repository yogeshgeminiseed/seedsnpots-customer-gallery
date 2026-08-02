<?php

if (!defined('ABSPATH')) {
    exit;
}

class SPG_Admin {

    public function __construct() {

        add_action('admin_menu', array($this, 'menu'));

    }

    public function menu() {

        add_menu_page(

            'Customer Gallery',

            'Garden Gallery',

            'manage_options',

            'spg-gallery',

            array($this, 'dashboard'),

            'dashicons-format-gallery',

            26

        );

    }

    public function dashboard() {

        ?>

        <div class="wrap">

            <h1>Seedsnpots Customer Gallery</h1>

            <p>Plugin Installed Successfully.</p>

        </div>

        <?php

    }

}