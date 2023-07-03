<?php
session_start();
include "dao/conexao_dao.php";
include "controller/obtem_tarifa_para_usuario_controller.php";
include "controller/login_usuario_com_session_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Estacionamento</title>
    <link rel="stylesheet" type="text/css" href="view/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login">
            </div>
            <div class="form-group">
                <a href="view/criar_usuario_view.php">Criar novo usuário</a>
            </div>
        </form>
    </div>
</body>
</html>
