<?php
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == 'ADMIN') {
    header("Location: index.php");
    exit();
}
if (isset($_POST['registrar_entrada'])) {
    include "../controller/registrar_entrada_controller.php";
    exit();
}
if (isset($_POST['registrar_saida'])) {
    include "../controller/registrar_saida_controller.php";
    exit();
}