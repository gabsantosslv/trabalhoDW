<?php
if (isset($_POST['criar'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $email = $_POST['email'];

    // Verificar se a senha e o confirmar_senha são iguais
    if ($senha != $confirmar_senha) {
        $error = "As senhas não correspondem.";
    } else {
        include "../model/insere_novo_usuario_model.php";
        header("Location: ../index.php");
        exit();
    }
}