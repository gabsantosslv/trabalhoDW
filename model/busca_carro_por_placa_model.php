<?php
$sql = "SELECT * FROM carros WHERE placa = '$placa'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
?>