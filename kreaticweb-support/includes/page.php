<?php

function support_content() {
    // Si se ha enviado el formulario, procesar la información
    global $plugin_url;
    if (isset($_POST['submit'])) {
        $nombre = sanitize_text_field($_POST['nombre']);
        $email = sanitize_email($_POST['email']);
        $mensaje = sanitize_textarea_field($_POST['mensaje']);

        // Envía el correo electrónico
        $to = 'david@kreaticweb.com';
        $subject = 'Soporte WP - ' . get_bloginfo('name');
        $body = 'Nombre: ' . $nombre . "<br>";
        $body .= 'Correo electrónico: ' . $email . "<br>";
        $body .= 'Mensaje: ' . $mensaje;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $enviado = wp_mail($to, $subject, $body, $headers);

        if ($enviado) {
            echo '<div class="notice notice-success">
                <p>Mensaje enviado correctamente. David se pondrá en contacto contigo al correo <b>' . $email . '</b></p>
            </div>';
        } else {
            echo '<div class="notice notice-error">
                <p>Ha ocurrido un error al enviar el mensaje. Por favor, contacta directamente <a href="https://wa.me/665067587" target="_blank">aquí</a>.</p>
            </div>';
        }
    }

    // Mostrar el formulario de contacto
    ?>
    <div class="wrap">
        <h1>Soporte técnico</h1>
        <div class="notice notice-info">
            <p>Contacta con desarrollo para solucionar las dudas o problemas que puedan surgir.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="krw-card p-3 mt-3">
                    <h2 class="mt-0">Información</h2>
                    <p>Datos de agencia y desarrollador a cargo de <b><?= get_bloginfo('name'); ?></b>.</p>
                    <hr>
                    <p><b>Desarrollador:</b> <a href="https://kreaticweb.com" target="_blank">David Gomez Reina</a></p>
                    <p><b>Whatsapp:</b> <a href="https://wa.me/665067587" target="_blank">665 06 75 87</a></p>
                    <p><b>Correo:</b> <a href="mailto:david@kreaticweb.com">david@kreaticweb.com</a></p>
                    <p><b>Agencia:</b> <a href="https://kreaticweb.com" target="_blank">Kreatic Web</a></p>
                    <p><b>Web:</b> <a href="https://kreaticweb.com" target="_blank">https://kreaticweb.com</a></p>
                    <hr class="mb-4">
                    <a class="" href="https://kreaticweb.com">
                        <img height="30px" src="<?= $plugin_url; ?>/assets/img/kreaticweb-logo.svg" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <form class="krw-card krw-form p-3 mt-3" method="post">
                    <h2 class="mt-0">Abrir incidencia con el desarrollador</h2>
                    <div class="row mb-2">
                        <div class="col-12">
                            <label for="nombre">Nombre:
                                <input type="text" name="nombre" required>
                            </label>
                        </div>
                        <div class="col-12">
                            <label for="email">Correo electrónico:
                                <input type="email" name="email" required>
                            </label>
                        </div>
                        <div class="col-12">
                            <label for="mensaje">Incidencia:</label>
                            <textarea style="width: 100%; min-height: 250px" name="mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-9">
                        </div>
                    </div>
                    <div class="col" style="text-align: end">
                        <button class="button-primary" type="submit" name="submit">Enviar Incidencia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php }
