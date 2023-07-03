<?php
$tarifa = mysqli_query($conexao, "SELECT * FROM tarifas WHERE CURDATE() BETWEEN data_inicio AND data_termino");
$tarifa_row = mysqli_fetch_assoc($tarifa);
?>