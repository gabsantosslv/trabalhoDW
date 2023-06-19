<?php
include "../dao/conexao.php";

include "../controller/select_tarifas.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar tarifas anteriores</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
    <div class="container">
        <h2>Lojas Cadastradas</h2>
        <table>
            <tr>
                <th>Valor da tarifa</th>
                <th>Data de inicio</th>
                <th>Data de término</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['valor_tarifa']."</td>";
                echo "<td>".$row['data_inicio']."</td>";
                echo "<td>".$row['data_termino']."</td>";
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
