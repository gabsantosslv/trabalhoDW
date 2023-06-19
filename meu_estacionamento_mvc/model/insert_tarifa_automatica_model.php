<?php
$inserir_nova_tarifa = "INSERT INTO tarifas (valor_tarifa, data_inicio, data_termino) 
VALUES ('$nova_tarifa', '$nova_data_inicio', '$nova_data_termino')";
mysqli_query($conexao, $inserir_nova_tarifa);
?>