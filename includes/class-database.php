<?php

if (!defined('ABSPATH')) {
    exit;
}

class SPG_Database {

    public static function install() {

        global $wpdb;

        $table = $wpdb->prefix . 'spg_gallery';

        $charset = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table (

        id BIGINT(20) NOT NULL AUTO_INCREMENT,

        product_id BIGINT(20) NOT NULL,

        customer_name VARCHAR(200),

        customer_email VARCHAR(200),

        city VARCHAR(150),

        order_number VARCHAR(100),

        experience LONGTEXT,

        germination_days VARCHAR(50),

        images LONGTEXT,

        status VARCHAR(20) DEFAULT 'pending',

        created DATETIME DEFAULT CURRENT_TIMESTAMP,

        PRIMARY KEY(id)

        ) $charset;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        dbDelta($sql);
    }

}