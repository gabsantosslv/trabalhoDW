<?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['valor_tarifa']."</td>";
        echo "<td>".date('d-m-Y', strtotime($row['data_inicio']))."</td>";
        echo "<td>".date('d-m-Y', strtotime($row['data_termino']))."</td>";
        echo "</tr>";
    }
?>