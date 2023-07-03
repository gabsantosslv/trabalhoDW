<?php
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'ADMIN') {
    header("Location: ../index.php");
    exit();
}
// Verifica se a data_termino da tarifa atual é anterior ou igual à data atual do sistema
include "../model/consulta_tarifa_atual_model.php";
$data_termino_tarifa_atual = $tarifa_atual['data_termino'];
$data_atual = date('Y-m-d');
if ($data_termino_tarifa_atual <= $data_atual) {
    include "../model/insere_nova_tarifa_model.php";
}
if (isset($_POST['alterar_tarifa'])) {
    include "../controller/altera_tarifa_controller.php";
    echo '<script>exibirPopUpSucesso("Tarifa alterada com sucesso!");</script>';
}
if (isset($_POST['cadastrar_loja'])) {
    include "../model/cadastrar_loja_model.php";
    echo '<script>exibirPopUpSucesso("Loja cadastrada com sucesso!");</script>';
}
if (isset($_POST['efetuar_pagamento'])) {
    include "../model/efetua_pagamento_model.php";
    echo '<script>exibirPopUpSucesso("Pagamento efetuado com sucesso!");</script>';
}