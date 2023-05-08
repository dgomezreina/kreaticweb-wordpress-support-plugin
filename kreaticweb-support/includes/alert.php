<?php
// Mostrar la alerta en el panel de administración
function my_alert_plugin_admin_notice() {
    if ( ! get_user_meta( get_current_user_id(), 'my_alert_plugin_dismissed', false ) ) { ?>
        <div class="notice notice-info">
            <a href="" target="_blank">
                <img height="40px" src="<?php echo plugins_url( 'assets/kreaticweb-logo.svg', __FILE__ ); ?>" alt="Kreatic Web">
            </a>
            <p><b><?php _e( '¿Necesitas ayuda?', 'kreaticweb-support' ); ?></b></p>
            <p><a href="<?php echo admin_url( 'admin.php?page=my-contact-form' ); ?>"><?php _e( 'Haga clic aquí para acceder al formulario de contacto', 'my-alert-plugin' ); ?></a></p>
        </div>
    <?php }
}
add_action( 'admin_notices', 'my_alert_plugin_admin_notice' );

function my_alert_plugin_dismiss() {
    update_user_meta( get_current_user_id(), 'my_alert_plugin_dismissed', true );
}
add_action( 'wp_ajax_my_alert_plugin_dismiss', 'my_alert_plugin_dismiss' );
