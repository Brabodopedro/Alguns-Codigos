<?php
/*
Plugin Name: Meu Plugin de Relatório de Registros
Description: Adiciona um comando WP-CLI para imprimir um relatório de histórico de registros.
*/

// Função para imprimir o relatório de registros
function imprimir_relatorio_registros() {
    global $wpdb;
    $tabela = $wpdb->prefix . 'registros'; // Nome da tabela no banco de dados

    $registros = $wpdb->get_results("SELECT * FROM $tabela ORDER BY data_hora DESC");

    if (empty($registros)) {
        WP_CLI::success('Nenhum registro encontrado.');
    } else {
        WP_CLI::line('Registros:');
        foreach ($registros as $registro) {
            WP_CLI::line('ID: ' . $registro->id . ' | Data e Hora: ' . $registro->data_hora);
        }
    }
}

if (defined('WP_CLI') && WP_CLI) {
    WP_CLI::add_command('imprimir_relatorio_registros', 'imprimir_relatorio_registros');
}
