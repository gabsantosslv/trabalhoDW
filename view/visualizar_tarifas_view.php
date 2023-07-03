<?php
include "../dao/conexao_dao.php";

include "../model/select_tarifas_model.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar tarifas anteriores</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    
</head>
<body>
    <div class="container">
        <h2>Lojas Cadastradas</h2>
        <table class="table">
            <tr>
                <th>Valor da tarifa</th>
                <th>Data de inicio</th>
                <th>Data de término</th>
            </tr>
            <?php
            include "../controller/mostra_tarifas_controller.php";
            ?>
        </table>
        <div class="form-group">
            <a href="pagina_admin_view.php">Voltar</a>
        </div>
    </div>
</body>
</html>
