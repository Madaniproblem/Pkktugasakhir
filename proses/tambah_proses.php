<?php
include('../connectionsql/sqlconnection.php');

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "../img/" . $gambar;

if (move_uploaded_file($tmp, $folder)) {
  $query = "INSERT INTO products (product_name,description,product_price,product_img) VALUES ('$nama','$deskripsi', '$harga', '$gambar')";
  if ($conns->query($query)) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../dashboard.php';</script>";
    exit();
  } else {
    echo "Gagal simpan data!";
  }
} else {
  echo "Upload gambar gagal!";
}
?>
