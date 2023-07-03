<?php
$sql = "UPDATE carros SET data_saida = '$data_saida', valor_pago = '$valor_total', loja_frequentada = '$loja_frequentada' WHERE placa = '$placa'";
mysqli_query($conexao, $sql);
?>