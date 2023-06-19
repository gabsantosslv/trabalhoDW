<?php
include "../dao/conexao.php";

if (isset($_POST['criar'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $email = $_POST['email'];

    // Verificar se a senha e o confirmar_senha são iguais
    if ($senha != $confirmar_senha) {
        $error = "As senhas não correspondem.";
    } else {
        include "../controller/insert_usuario.php";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Estacionamento - Criar Usuário</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Criar Novo Usuário</h2>
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
                <label for="confirmar_senha">Confirmar Senha:</label>
                <input type="password" name="confirmar_senha" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="criar" value="Criar">
            </div>
        </form>
    </div>
</body>
</html>
