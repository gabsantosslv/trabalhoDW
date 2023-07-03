<?php
$sql = "SELECT nome_loja FROM lojas";
$result = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo "<option value='".$row['nome_loja']."'>".$row['nome_loja']."</option>";
}
?>