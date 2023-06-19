<?php
$nova_tarifa = $_POST['nova_tarifa'];
$nova_data_termino = $_POST['data_termino'];
$nova_data_inicio = "UPDATE tarifas SET data_inicio = '$data_atual' WHERE id = 1";
    mysqli_query($conexao, $nova_data_inicio);
?>