<?php
$nome_loja = $_POST['nome_loja'];
$email_loja = $_POST['email_loja'];
$sql = "INSERT INTO lojas (nome_loja, email_contato, valor_a_ser_pago) VALUES ('$nome_loja', '$email_loja', 0)";
mysqli_query($conexao, $sql);
?>