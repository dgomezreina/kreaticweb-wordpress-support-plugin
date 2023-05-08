<?php
// Agregar estilo CSS al panel de administración
add_action('admin_head', 'agregar_estilo_css_al_panel_de_administracion');

function agregar_estilo_css_al_panel_de_administracion(){
    echo '<style>
        /* Estilo CSS para la pestaña del sidebar de tu plugin */
        #toplevel_page_kreaticweb-support{
            background-color: #2c3338;
        }
    </style>';
}