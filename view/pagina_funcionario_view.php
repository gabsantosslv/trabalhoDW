<?php
session_start();
include "../dao/conexao_dao.php";
include "../controller/pagina_funcionario_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página do Funcionário</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Página do Funcionário</h2>
        <h3>Registrar Entrada de Veículo</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" name="placa" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="cor">Cor:</label>
                <input type="text" name="cor" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" required>
            </div>
            <div class="form-group">
                <input type="submit" name="registrar_entrada" value="Registrar Entrada">
            </div>
        </form>
        <h3>Registrar Saída de Veículo</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="placa">Placa:</label>
                <input type="text" name="placa" required>
            </div>
            <div class="form-group">
                <input type="checkbox" name="carimbo_loja" value="Carimbo da Loja"> Carimbo da Loja
            </div>
            <div class="form-group">
                <label for="carimbo_loja">Loja frequentada:</label>
                <select name="carimbo_loja">
                    <option value="">Nenhuma</option>
                    <?php
                    include "../controller/carimbo_de_loja_controller.php";
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="registrar_saida" value="Registrar Saída">
            </div>
        </form>
        <h3>Carros no Estacionamento</h3>
        <form method="POST" action="visualizar_carros_view.php">
            <div class="form-group">
                <input type="submit" name="exibir_carros" value="Exibir Carros">
            </div>
        </form>
        <div class="form-group">
            <a href="../dao/logout_dao.php">Sair do Sistema</a>
        </div>
    </div>
</body>
</html>
