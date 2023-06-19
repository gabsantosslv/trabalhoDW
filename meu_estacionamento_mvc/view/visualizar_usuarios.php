<?php
include "../dao/conexao.php";

include "../controller/mostra_usuarios.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Usuários Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Usuários Cadastrados</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email de Contato</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email_contato']."</td>";
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
