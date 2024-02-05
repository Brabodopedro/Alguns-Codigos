<?php
/*
Plugin Name: Meu Plugin de Registro de Hora e Data
Description: Adiciona um botão para registrar a data e hora no banco de dados WordPress.
*/

// Função para registrar a data e hora no banco de dados
function registrar_data_hora() {
    global $wpdb;
    $tabela = $wpdb->prefix . 'registros'; // Nome da tabela no banco de dados

    $data_hora = current_time('mysql');

    $wpdb->insert($tabela, array('data_hora' => $data_hora));

    echo 'Registro inserido com sucesso!';
}

// Adicionar um shortcode para exibir o botão
function shortcode_registro_data_hora() {
    ob_start();
    echo '<button id="registro-btn">Registrar Data e Hora</button>';
    echo '<script>
            document.getElementById("registro-btn").addEventListener("click", function() {
                // Chamar a função para registrar a data e hora
                ' . esc_js('registrar_data_hora()') . ';
            });
        </script>';
    return ob_get_clean();
}

add_shortcode('registrar_data_hora', 'shortcode_registro_data_hora');

// Ativar a tabela no ativação do plugin
function ativar_plugin() {
    global $wpdb;
    $tabela = $wpdb->prefix . 'registros';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabela (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        data_hora datetime NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'ativar_plugin');
