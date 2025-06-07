<?php
include('../db.php');

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "../img/" . $gambar;

if (move_uploaded_file($tmp, $folder)) {
  $query = "INSERT INTO produk (nama_produk,deskripsi, harga, gambar) VALUES ('$nama','$deskripsi', '$harga', '$gambar')";
  if ($conn->query($query)) {
    header("Location: ../admin/dashboard.php");
  } else {
    echo "Gagal simpan data!";
  }
} else {
  echo "Upload gambar gagal!";
}
?>
