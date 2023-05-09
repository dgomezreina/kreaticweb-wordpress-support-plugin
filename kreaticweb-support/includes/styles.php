<?php

function enqueue_styles() {
    global $plugin_url;
    wp_enqueue_style( 'style', $plugin_url . "/assets/css/styles.css");
    wp_enqueue_style( 'bootstrap', $plugin_url . "/assets/css/bootstrap-grid.min.css");
}

add_action( 'admin_head', 'enqueue_styles' );