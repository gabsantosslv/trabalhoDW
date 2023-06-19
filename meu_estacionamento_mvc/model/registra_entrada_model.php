<?php
$sql = "INSERT INTO carros (placa, modelo, cor, marca, data_entrada) VALUES ('$placa', '$modelo', '$cor', '$marca', '$data_entrada')";
mysqli_query($conexao, $sql);
header("Location: ../view/pagina_funcionario.php");
?>