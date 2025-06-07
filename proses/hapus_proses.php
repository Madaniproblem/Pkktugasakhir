<?php
include('../db.php');
$id = $_GET['id'];
$conn->query("DELETE FROM produk WHERE id=$id");
header("Location: ../admin/dashboard.php");
?>
