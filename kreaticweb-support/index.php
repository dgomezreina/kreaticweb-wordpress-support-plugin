<?php


/**
 * @package Kreatic_Web_SUpport
 * @version 1.0.0
 */
/*
Plugin Name: Soporte Kreatic Web
Plugin URI: https://kreaticweb.com
Description: Este plugin sirve de ayuda para los usuarios que usan webs y plugins desarrolladas por Kreatic Web.
Author: David Gomez
Version: 1.0.0
Author URI: https://kreaticweb.com
*/



// Activar el plugin
function activate_my_alert_plugin() {
    // Código de activación
}
register_activation_hook( __FILE__, 'activate_my_alert_plugin' );

// Desactivar el plugin
function deactivate_my_alert_plugin() {
    // Código de desactivación
}
register_deactivation_hook( __FILE__, 'deactivate_my_alert_plugin' );


// Pestaña de soporte
add_action('admin_menu', 'agregar_pestana');

function agregar_pestana(){
    add_menu_page(
        'Soporte técnico', // Título de la pestaña
        'Soporte técnico', // Nombre de la pestaña
        'manage_options', // Capacidad necesaria para ver la pestaña
        'kreaticweb-support', // Nombre único de la pestaña
        'support_content', // Función que muestra el contenido de la pestaña
        'dashicons-editor-code'
    );
}




include 'includes/styles.php';
include 'includes/page.php';
include 'includes/dashboard-widget.php';
//include 'includes/alert.php';


