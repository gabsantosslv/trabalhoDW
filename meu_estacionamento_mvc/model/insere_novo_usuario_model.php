<?php
$sql = "INSERT INTO usuarios (nome, senha, email_contato) VALUES ('$nome', '$senha', '$email')";
mysqli_query($conexao, $sql);
?>