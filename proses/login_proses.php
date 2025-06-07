<?php
session_start();
include('../connectionsql/sqlconnection.php');

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $statements = $conns->prepare("SELECT * FROM admin WHERE username = ? AND password = ? ");
    $statements->bind_param("ss", $user, $pass);
    $statements->execute();

    $result = $statements->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $user;
        echo "<script>alert('login berhasil');window.location.href='../dashboard.php'</script>";
        exit();
    } else {
        echo "<script>alert('Login gagal!');history.go(-1);</script>";
    }

    $statements->close();
}
?>
