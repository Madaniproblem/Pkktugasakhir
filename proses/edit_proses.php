<?php
include('../connectionsql/sqlconnection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if ($gambar != '') {
  move_uploaded_file($tmp, "../img/" . $gambar);
  $query = "UPDATE products SET product_name='$nama', description='$deskripsi',product_price='$harga', product_img='$gambar' WHERE id_product=$id";
} else {
  $query = "UPDATE products SET product_name='$nama', description='$deskripsi',product_price='$harga' WHERE id_product=$id";
}

if ($conns->query($query)) {
  echo "<script>alert('Data berhasil diupdate!'); window.location.href = '../dashboard.php';</script>";
  exit();
} else {
  echo "script>alert('Gagal update data!');</script>";
}
?>
