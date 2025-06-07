<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: admin/login.php");
include('connectionsql/sqlconnection.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <h6 class="float-end">Selamat Datang,<?php echo $_SESSION['admin'] ?></h6>
  <a href="admin/tambah_produk.php" class="btn btn-success mb-3">+ Tambah Produk</a>
  <a href="admin/logout.php" onclick="return confirm('Apakah kamu yakin ?')" class="btn btn-danger mb-3">Logout</a>

  <table class="table table-bordered">
    <thead>
      <tr><th>Nama</th><th>Harga</th><th>Gambar</th><th>Aksi</th></tr>
    </thead>
    <tbody>
      <?php
      $result = $conns->query("SELECT * FROM products");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['product_name'] ?></td>
        <td>Rp.<?= number_format($row['product_price'],0,',','.') ?></td>
        <td><img src="img/<?= $row['product_img'] ?>" width="70"></td>
        <td>
          <a href="admin/edit_produk.php?id_product=<?= $row['id_product'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="proses/hapus_proses.php?id_product=<?= $row['id_product'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
