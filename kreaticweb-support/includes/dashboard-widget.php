<?php

// Agregar widget en la página de escritorio
add_action('wp_dashboard_setup', 'agregar_widget_en_pagina_de_escritorio');

function agregar_widget_en_pagina_de_escritorio(){
    wp_add_dashboard_widget(
        'mi_widget_de_plugin', // Identificador único del widget
        'Título del Widget', // Título del widget
        'mostrar_widget_de_plugin' // Función que muestra el contenido del widget
    );

    // Obtener lista de widgets del dashboard
    global $wp_meta_boxes;
    $dashboard_widgets = $wp_meta_boxes['dashboard']['normal']['core'];

    // Obtener widget del plugin
    $widget_de_plugin = $dashboard_widgets['mi_widget_de_plugin'];

    // Eliminar widget del plugin de la lista de widgets del dashboard
    unset($dashboard_widgets['mi_widget_de_plugin']);

    // Insertar widget del plugin al inicio de la lista de widgets del dashboard
    array_unshift($dashboard_widgets, $widget_de_plugin);

    // Establecer lista de widgets del dashboard con el widget del plugin al inicio
    $wp_meta_boxes['dashboard']['normal']['core'] = $dashboard_widgets;
}

// Función que muestra el contenido del widget
function mostrar_widget_de_plugin(){
    // Código del formulario de contacto
}