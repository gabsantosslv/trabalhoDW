<?php
$consulta_tarifa_atual = "SELECT * FROM tarifas WHERE id = 1";
$resultado_tarifa_atual = mysqli_query($conexao, $consulta_tarifa_atual);
$tarifa_atual = mysqli_fetch_assoc($resultado_tarifa_atual);
?>