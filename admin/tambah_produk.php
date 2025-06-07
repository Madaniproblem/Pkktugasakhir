<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <h3>Tambah Produk Baru</h3>
  <form action="../proses/tambah_proses.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <!-- Nama Produk -->
      <label>Nama Produk</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
      <!-- Deksripsi Produk -->
    <div class="mb-3">
      <label label for="deskripsi" class="form-label">Deskripsi Produk</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
    </div>
      <!-- Harga Produk -->
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" required>
    </div>
    <!-- Gambar Produk -->
    <div class="mb-3">
      <label>Gambar (jpg/png)</label>
      <input type="file" name="gambar" class="form-control" required>
    </div>
    <!-- Deksripsi Produk -->
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
