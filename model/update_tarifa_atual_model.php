<?php
$atualizar_tarifa = "UPDATE tarifas SET valor_tarifa = '$nova_tarifa', data_termino = '$nova_data_termino' WHERE id = 1";
mysqli_query($conexao, $atualizar_tarifa);
?>