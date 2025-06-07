<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id_product'])) {
    $id = $_GET['id_product'];
    header("Location: ../proses/hapus_proses.php?id_product=$id");
    exit;
} else {
    echo "ID tidak ditemukan!";
}
?>
