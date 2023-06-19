<?php
include "../dao/conexao.php";

include "../controller/select_carros.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Carros no Estacionamento</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
    .container {
        width: 800px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Carros no estacionamento</h2>
        <table>
            <tr>
                <th>placa</th>
                <th>cor</th>
                <th>modelo</th>
                <th>marca</th>
                <th>data de entrada</th>
                <th>data de saída</th>
                <th>valor pago</th>
                <th>loja frequentada</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['placa']."</td>";
                echo "<td>".$row['cor']."</td>";
                echo "<td>".$row['modelo']."</td>";
                echo "<td>".$row['marca']."</td>";
                echo "<td>".$row['data_entrada']."</td>";
                echo "<td>".$row['data_saida']."</td>";
                echo "<td>".$row['valor_pago']."</td>";
                echo "<td>".$row['loja_frequentada']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <div class="form-group">
            <a href="pagina_funcionario.php">Voltar</a>
        </div>
    </div>
</body>
</html>