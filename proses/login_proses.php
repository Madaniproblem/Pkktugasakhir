<?php
session_start();
include('../db.php');

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = $conn->query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");
if ($query->num_rows > 0) {
    $_SESSION['admin'] = $user;
    header('Location: ../admin/dashboard.php');
} else {
    echo "<script>alert('Login gagal!');history.go(-1);</script>";
}
?>
