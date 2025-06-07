<?php
include('../connectionsql/sqlconnection.php');
$id = $_GET['id_product'];
$conns->query("DELETE FROM products WHERE id_product=$id");
header("Location: ../dashboard.php");
?>
