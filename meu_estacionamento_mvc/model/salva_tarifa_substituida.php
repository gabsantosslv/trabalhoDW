<?php
$valor_tarifa_substituida = $tarifa_atual['valor_tarifa'];
$data_inicio_substituida = $tarifa_atual['data_inicio'];
$data_termino_substituida = date('Y-m-d'); // Utiliza a data atual

$inserir_tarifa_anterior = "INSERT INTO tarifas_anteriores (valor_tarifa, data_inicio, data_termino) 
VALUES ('$valor_tarifa_substituida', '$data_inicio_substituida', '$data_termino_substituida')";
mysqli_query($conexao, $inserir_tarifa_anterior);

// Atualizar a data de término da tarifa anterior para a data atual do sistema
$atualizar_data_termino_anterior = "UPDATE tarifas_anteriores SET data_termino = '$data_termino_substituida' 
WHERE id = (SELECT MAX(id) FROM tarifas_anteriores)";
mysqli_query($conexao, $atualizar_data_termino_anterior);
?>