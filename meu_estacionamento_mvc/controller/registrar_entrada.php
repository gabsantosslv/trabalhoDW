<?php
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$marca = $_POST['marca'];
date_default_timezone_set('America/Sao_Paulo');
$data_entrada = date('Y-m-d H:i:s');

include "../model/registra_entrada_model.php";
?>