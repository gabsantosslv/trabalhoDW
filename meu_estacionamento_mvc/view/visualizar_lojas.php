<?php
include "../dao/conexao.php";

include "../controller/select_lojas.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Lojas Cadastradas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
    <div class="container">
        <h2>Lojas Cadastradas</h2>
        <table>
            <tr>
                <th>Nome da Loja</th>
                <th>Email para Contato</th>
                <th>Valor a ser Pago</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['nome_loja']."</td>";
                echo "<td>".$row['email_contato']."</td>";
                echo "<td>".$row['valor_a_ser_pago']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <div class="form-group">
            <a href="pagina_admin.php">Voltar</a>
        </div>
    </div>
</body>
</html>
