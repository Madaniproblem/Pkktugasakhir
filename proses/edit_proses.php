<?php
include('../db.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if ($gambar != '') {
  move_uploaded_file($tmp, "../img/" . $gambar);
  $query = "UPDATE produk SET nama_produk='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE id=$id";
} else {
  $query = "UPDATE produk SET nama_produk='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
}

if ($conn->query($query)) {
  header("Location: ../admin/dashboard.php");
} else {
  echo "Gagal update data!";
}
?>
