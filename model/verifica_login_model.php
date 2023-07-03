<?php
$sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
?>