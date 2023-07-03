<?php
include "../dao/conexao_dao.php";

include "../model/mostra_usuarios_model.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuários Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Usuários Cadastrados</h2>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Email de Contato</th>
            </tr>
            <?php
            include "../controller/mostra_usuarios_controller.php";
            ?>
        </table>
        <div class="form-group">
            <a href="pagina_admin_view.php">Voltar</a>
        </div>
    </div>
</body>
</html>
