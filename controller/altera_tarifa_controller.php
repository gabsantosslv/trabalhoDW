<?php
include "../model/salva_nova_tarifa_model.php";

// Consultar a tarifa atual
include "../model/consulta_tarifa_atual_model.php";

// Gravar tarifa substituída na tabela "tarifas_anteriores" com a data de término atual
include "../model/salva_tarifa_substituida_model.php";

// Atualizar tabela "tarifas" com a nova tarifa e data de término
include "../model/update_tarifa_atual_model.php";

?>