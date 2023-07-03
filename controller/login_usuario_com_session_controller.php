<?php
if (isset($_POST['login'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    include "model/verifica_login_model.php";
    if ($row) {
        $_SESSION['usuario'] = $nome;
        if ($nome == 'ADMIN') {
            header("Location: view/pagina_admin_view.php");
            exit();
        } else {
            // Início da alteração - Obter valor da tarifa e armazenar na sessão
       	    $tarifa = mysqli_query($conexao, "SELECT * FROM tarifas WHERE CURDATE() BETWEEN data_inicio AND data_termino");
       	    $tarifa_row = mysqli_fetch_assoc($tarifa);

       	    $_SESSION['valor_tarifa'] = $tarifa_row['valor_tarifa'];
       	    // Fim da alteração

            header("Location: view/pagina_funcionario_view.php");
            exit();
        }
    } else {
        $error = "Nome de usuário ou senha incorretos.";
    }
}