<?php
if (isset($_SESSION['usuario'])) {
    if ($nome == 'ADMIN') {
        header("Location: view/pagina_admin_view.php");
        exit();
    } else {
        // Obter valor da tarifa e armazenar na sessão
        $tarifa = mysqli_query($conexao, "SELECT * FROM tarifas WHERE CURDATE() BETWEEN data_inicio AND data_termino");
        $tarifa_row = mysqli_fetch_assoc($tarifa);
    
        $_SESSION['valor_tarifa'] = $tarifa_row['valor_tarifa'];
    
        header("Location: view/pagina_funcionario_view.php");
        exit();
    }    
}