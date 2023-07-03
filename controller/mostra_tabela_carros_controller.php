<?php
    while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['placa']."</td>";
    echo "<td>".$row['cor']."</td>";
    echo "<td>".$row['modelo']."</td>";
    echo "<td>".$row['marca']."</td>";
    echo "<td>".date('d-m-Y', strtotime($row['data_entrada']))."</td>";
    echo "<td>".date('d-m-Y', strtotime($row['data_saida']))."</td>";
    echo "<td>".$row['valor_pago']."</td>";
    echo "<td>".$row['loja_frequentada']."</td>";
    echo "</tr>";
}
?>