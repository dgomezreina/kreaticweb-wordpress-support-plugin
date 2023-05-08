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


// Mostrar la alerta en el panel de administración
function my_alert_plugin_admin_notice() { ?>
    <div class="notice notice-info">
        <a href="" target="_blank">
            <img height="40px" src="<?php echo plugins_url( 'assets/kreaticweb-logo.svg', __FILE__ ); ?>" alt="Kreatic Web">
        </a>
        <p><b><?php _e( '¿Necesitas ayuda?', 'kreaticweb-support' ); ?></b></p>
        <p><a href="<?php echo admin_url( 'admin.php?page=my-contact-form' ); ?>"><?php _e( 'Haga clic aquí para acceder al formulario de contacto', 'my-alert-plugin' ); ?></a></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'my_alert_plugin_admin_notice' );


// TODO: Crear una seccion en el panel de admin con el contacto rapido