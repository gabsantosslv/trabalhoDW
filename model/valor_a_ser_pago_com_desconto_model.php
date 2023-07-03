<?php
$sql = "UPDATE lojas SET valor_a_ser_pago = valor_a_ser_pago + ($valor_tarifa / 2) WHERE nome_loja = '$loja_frequentada'";
mysqli_query($conexao, $sql);
?>