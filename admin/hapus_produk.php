<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    header("Location: ../proses/hapus_proses.php?id=$id");
    exit;
} else {
    echo "ID tidak ditemukan!";
}
?>
