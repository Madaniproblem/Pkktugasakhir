<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include('../db.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <h3>Selamat Datang, Admin</h3>
  <a href="tambah_produk.php" class="btn btn-success mb-3">+ Tambah Produk</a>
  <a href="logout.php" class="btn btn-danger mb-3">Logout</a>

  <table class="table table-bordered">
    <thead>
      <tr><th>Nama</th><th>Harga</th><th>Gambar</th><th>Aksi</th></tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM produk");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['nama_produk'] ?></td>
        <td>Rp <?= number_format($row['harga']) ?></td>
        <td><img src="../img/<?= $row['gambar'] ?>" width="60"></td>
        <td>
          <a href="edit_produk.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="../proses/hapus_proses.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
