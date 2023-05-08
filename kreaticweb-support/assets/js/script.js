jQuery(document).ready(function($) {
    $(document).on('click', '.my-alert-plugin-notice .notice-dismiss', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'my_alert_plugin_dismiss'
            }
        });
    });
});

// TODO: Agregar este archivo al script principal para que se cargue