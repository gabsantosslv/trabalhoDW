<?php
    $placa = $_POST['placa'];
    date_default_timezone_set('America/Sao_Paulo');
    $data_saida = date('Y-m-d H:i:s');

    include "../model/busca_carro_por_placa_model.php";

    // Cálculo do valor a ser pago
    $valor_tarifa = $_SESSION['valor_tarifa'];
    $data_entrada = $row['data_entrada'];
    $data_entrada_obj = new DateTime($data_entrada);
    $data_saida_obj = new DateTime($data_saida);
    $diferenca = $data_entrada_obj->diff($data_saida_obj);
    $horas = $diferenca->h;
    $horas += $diferenca->days * 24;
    $valor_total = 0;

    if ($horas <= 1) {
        $valor_total = $valor_tarifa;
    } else {
        $valor_total = $valor_tarifa + ($horas - 1) * ($valor_tarifa / 2);
    }

    // Verificar se há carimbo de loja
    if (isset($_POST['carimbo_loja']) && $_POST['carimbo_loja'] !== '') {
        $loja_frequentada = $_POST['carimbo_loja'];
        include "../model/valor_a_ser_pago_com_desconto_model.php";
        $valor_total -= ($valor_tarifa / 2);
    } else {
        $loja_frequentada = '';
    }

    include "../model/registra_saida_model.php";
    header("Location: ../view/pagina_funcionario_view.php");
?>