<?php
session_start();
include "dao/conexao.php";

if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 'ADMIN') {
        header("Location: view/pagina_admin.php");
        exit();
    } else {
        header("Location: view/pagina_funcionario.php");
        exit();
    }
}

if (isset($_POST['login'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    include "model/verifica_login_model.php";

    if ($row) {
        $_SESSION['usuario'] = $nome;
        if ($nome == 'ADMIN') {
            header("Location: view/pagina_admin.php");
            exit();
        } else {
            header("Location: view/pagina_funcionario.php");
            exit();
        }
    } else {
        $error = "Nome de usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Estacionamento</title>
    <link rel="stylesheet" type="text/css" href="view/estilo.css">
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
                <a href="view/criar_usuario.php">Criar novo usuário</a>
            </div>
        </form>
    </div>
</body>
</html>
