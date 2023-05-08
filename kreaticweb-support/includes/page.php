<?php

function support_content() {
    // Si se ha enviado el formulario, procesar la información
    if (isset($_POST['submit'])) {
        $nombre = sanitize_text_field($_POST['nombre']);
        $email = sanitize_email($_POST['email']);
        $mensaje = sanitize_textarea_field($_POST['mensaje']);

        // Envía el correo electrónico
        $to = 'david@kreaticweb.com';
        $subject = 'Soporte WP - ' . get_bloginfo('name');
        $body = 'Nombre: ' . $nombre . "\n\n" . 'Correo electrónico: ' . $email . "\n\n" . 'Mensaje: ' . $mensaje;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $enviado = wp_mail($to, $subject, $body, $headers);

        if ($enviado) {
            echo '<p>Mensaje enviado correctamente. Gracias por contactarnos.</p>';
        } else {
            echo '<p>Ha ocurrido un error al enviar el mensaje. Por favor, intenta de nuevo más tarde.</p>';
        }
    }

    // Mostrar el formulario de contacto
    echo '
<h1>Soporte técnico</h1>
<div class="notice notice-info">
            <p>Contacta con desarrollo para solucionar las dudas o problemas que puedan surgir.</p>
        </div>
<h2>Abrir ticket</h2>
<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required>
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" required></textarea>
    <input type="submit" name="submit" value="Enviar">
</form>
';
}
