<?php
$nova_tarifa = 10;
$nova_data_inicio = $data_atual;
$nova_data_termino = date('Y-m-d', strtotime($data_atual . '+ 7 days'));

include "../model/insert_tarifa_automatica_model.php";
?>