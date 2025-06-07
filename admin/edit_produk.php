<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include('../connectionsql/sqlconnection.php');
$id = $_GET['id_product'];
$data = $conns->query("SELECT * FROM products WHERE id_product=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <h3>Edit Produk</h3>
  <form action="../proses/edit_proses.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_product'] ?>">
    <div class="mb-3">
      <label>Nama Produk</label>
      <input type="text" name="nama" class="form-control" value="<?= $data['product_name'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi Produk</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?= htmlspecialchars($data['description']) ?></textarea>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" value="<?= $data['product_price'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Ganti Gambar (opsional)</label>
      <input type="file" name="gambar" class="form-control">
      <small>Gambar saat ini: <strong><?= $data['product_img'] ?></strong></small>
    </div>
    <button type="submit" onclick="question()" class="btn btn-primary">Update</button>
    <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
<script>
  function question() {
    const confirmation = confirm("Apakah kamu yakin ingin mengupdate produk ini?");
    if (!confirmation) {
      event.preventDefault();
    }
  }
</script>
</body>
</html>
