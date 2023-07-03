<?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['nome_loja']."</td>";
        echo "<td>".$row['email_contato']."</td>";
        echo "<td>".$row['valor_a_ser_pago']."</td>";
        echo "</tr>";
    }
?>