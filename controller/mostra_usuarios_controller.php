<?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['email_contato']."</td>";
        echo "</tr>";
    }
?>