<?php
session_start();
include "../dao/conexao.php";

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'ADMIN') {
    header("Location: ../index.php");
    exit();
}

// Verifica se a data_termino da tarifa atual é anterior ou igual à data atual do sistema
include "../controller/verifica_data_da_tarifa.php";

$data_termino_tarifa_atual = $tarifa_atual['data_termino'];
$data_atual = date('Y-m-d');

if ($data_termino_tarifa_atual <= $data_atual) {
    include "../controller/insere_nova_tarifa.php";
}

if (isset($_POST['alterar_tarifa'])) {
    include "../controller/altera_tarifa.php";
    
    echo '<script>exibirPopUpSucesso("Tarifa alterada com sucesso!");</script>';
}

if (isset($_POST['cadastrar_loja'])) {
    include "../controller/cadastrar_loja.php";
    
    echo '<script>exibirPopUpSucesso("Loja cadastrada com sucesso!");</script>';
}

if (isset($_POST['efetuar_pagamento'])) {
    include "../controller/efetua_pagamento.php";
    
    echo '<script>exibirPopUpSucesso("Pagamento efetuado com sucesso!");</script>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Administrador</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script>
        function exibirPopUpSucesso(foi efetuado com sucesso) {
            alert(foi efetuado com sucesso);
        }

        function exibirPopUpErro(não foi efetuado com sucesso) {
            alert(não foi efetuado com sucesso);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Página do Administrador</h2>
        <h3>Alteração de Tarifa</h3>
        <?php
        $sql = "SELECT * FROM tarifas WHERE id = 1";
        $result = mysqli_query($conexao, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="tarifa_atual">Tarifa Atual:</label>
                <input type="text" name="tarifa_atual" value="<?php echo $row['valor_tarifa']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="data_termino_atual">Data de Término Atual:</label>
                <input type="text" name="data_termino_atual" value="<?php echo $row['data_termino']; ?>" readonly>
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
                $sql = "SELECT nome_loja FROM lojas";
                $result = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['nome_loja']."'>".$row['nome_loja']."</option>";
                }
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
        <form method="POST" action="visualizar_lojas.php">
            <div class="form-group">
                <input type="submit" name="visualizar_lojas" value="Visualizar Lojas">
            </div>
        </form>

        <h3>Visualizar Usuários Cadastrados</h3>
        <form method="POST" action="visualizar_usuarios.php">
            <div class="form-group">
                <input type="submit" name="visualizar_usuarios" value="Visualizar Usuários">
            </div>
        </form>
        <h3>Visualizar Tarifas Anteriores</h3>
        <form method="POST" action="visualizar_tarifas.php">
            <div class="form-group">
                <input type="submit" name="visualizar_tarifas" value="Visualizar Tarifas">
            </div>
        </form>
        <div class="form-group">
            <a href="../dao/logout.php">Sair do Sistema</a>
        </div>

    </div>
</body>
</html>
