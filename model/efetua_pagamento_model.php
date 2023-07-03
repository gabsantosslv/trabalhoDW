<?php
$nome_loja = $_POST['nome_loja'];
$valor_pagamento = $_POST['valor_pagamento'];

$sql = "UPDATE lojas SET valor_a_ser_pago = valor_a_ser_pago - '$valor_pagamento' WHERE nome_loja = '$nome_loja'";
mysqli_query($conexao, $sql);
?>