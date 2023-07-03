<?php
session_start();
include "../dao/conexao_dao.php";
include "../controller/pagina_admin_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página do Administrador</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Página do Administrador</h2>
        <h3>Alteração de Tarifa</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="tarifa_atual">Tarifa Atual:</label>
                <input type="text" name="tarifa_atual" value="<?php echo $tarifa_atual['valor_tarifa']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="data_termino_atual">Data de Término Atual:</label>
                <input type="text" name="data_termino_atual" value="<?php echo $tarifa_atual['data_termino']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nova_tarifa">Nova Tarifa:</label>
                <input type="text" name="nova_tarifa" required>
            </div>
            <div class="form-group">
                <label for="data_termino">Data de Término da Nova Tarifa:</label>
                <input type="date" name="data_termino" required>
            </div>
            <div class="form-group">
                <input type="submit" name="alterar_tarifa" value="Alterar Tarifa">
            </div>
        </form>
        <h3>Cadastro de Lojas</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nome_loja">Nome da Loja:</label>
                <input type="text" name="nome_loja" required>
            </div>
            <div class="form-group">
                <label for="email_loja">Email para Contato:</label>
                <input type="email" name="email_loja" required>
            </div>
            <div class="form-group">
                <input type="submit" name="cadastrar_loja" value="Cadastrar Loja">
            </div>
        </form>
        <h3>Pagamento das Lojas</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nome_loja">Nome da Loja:</label>
                <select name="nome_loja">
                <?php
                include "../model/mostra_lojas_model.php";
                ?>
            </select>
            </div>
                <div class="form-group">
                <label for="valor_pagamento">Valor a ser Pago:</label>
                <input type="number" step="0.01" name="valor_pagamento" required>
            </div>
            <div class="form-group">
                <input type="submit" name="efetuar_pagamento" value="Efetuar Pagamento">
            </div>
        </form>
        <h3>Visualizar Lojas Cadastradas</h3>
        <form method="POST" action="visualizar_lojas_view.php">
            <div class="form-group">
                <input type="submit" name="visualizar_lojas" value="Visualizar Lojas">
            </div>
        </form>
        <h3>Visualizar Usuários Cadastrados</h3>
        <form method="POST" action="visualizar_usuarios_view.php">
            <div class="form-group">
                <input type="submit" name="visualizar_usuarios" value="Visualizar Usuários">
            </div>
        </form>
        <h3>Visualizar Tarifas Anteriores</h3>
        <form method="POST" action="visualizar_tarifas_view.php">
            <div class="form-group">
                <input type="submit" name="visualizar_tarifas" value="Visualizar Tarifas">
            </div>
        </form>
        <div class="form-group">
            <a href="../dao/logout_dao.php">Sair do Sistema</a>
        </div>
    </div>
</body>
</html>
