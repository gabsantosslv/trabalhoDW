<?php
include "../dao/conexao_dao.php";
include "../model/select_lojas_model.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Lojas Cadastradas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Lojas Cadastradas</h2>
        <table class="table">
            <tr>
                <th>Nome da Loja</th>
                <th>Email para Contato</th>
                <th>Valor a ser Pago</th>
            </tr>
            <?php
            include "../controller/mostra_lojas_controller.php";
            ?>
        </table>
        <div class="form-group">
            <a href="pagina_admin_view.php">Voltar</a>
        </div>
    </div>
</body>
</html>

