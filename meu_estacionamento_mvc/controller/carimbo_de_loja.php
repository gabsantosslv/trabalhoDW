<?php
include "../model/select_carimbo_de_loja.php";
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['nome_loja'] . '">' . $row['nome_loja'] . '</option>';
}
?>