<?php
    $nameserve = "localhost";
    $username = "root";
    $password = "";
    $namedb = "pkktugasakhir";

    $conns = mysqli_connect($nameserve, $username, $password, $namedb);
    if ($conns->connect_error) {
        die("Your connection database could not be connected : ". $conns->connect_error);
    }
    
?>