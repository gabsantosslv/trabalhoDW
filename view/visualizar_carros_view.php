<?php
include "../dao/conexao_dao.php";
include "../model/select_carros_model.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Carros no Estacionamento</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<div class="container">
    <h2>Carros no estacionamento</h2>
    <table class="table">
        <tr>
            <th>placa</th>
            <th>cor</th>
            <th>modelo</th>
            <th>marca</th>
            <th>data de entrada</th>
            <th>data de saída</th>
            <th>valor pago</th>
            <th>loja frequentada</th>
        </tr>
        <?php
        include "../controller/mostra_tabela_carros_controller.php";
        ?>
    </table>
    <div class="form-group">
        <a href="pagina_funcionario_view.php">Voltar</a>
    </div>
</div>
</body>
</html>
