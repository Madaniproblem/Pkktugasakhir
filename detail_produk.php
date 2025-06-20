<?php include('includes/header.php'); ?>
<?php
include 'connectionsql/sqlconnection.php';
if (!isset($_GET['id_product'])) {
  header("Location: produk.php");
  exit;
}

$id = $_GET['id_product'];
$query = $conns->query("SELECT * FROM products WHERE id_product = $id");

if ($query->num_rows == 0) {
  echo "<h3>Produk tidak ditemukan!</h3>";
  exit;
}

$produk = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Produk - <?= $produk['product_name'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-img {
      width: 100%;
      max-height: 500px;
      object-fit: cover;
      border-radius: 12px;
    }
    .price {
      color: #e67e22;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .back-btn {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <a href="produk.php" class="btn btn-secondary mb-4">← Kembali ke Daftar Produk</a>

  <div class="row">
    <div class="col-md-6">
      <img src="img/<?= $produk['product_img'] ?>" class="product-img" alt="<?= $produk['product_name'] ?>">
    </div>
    <div class="col-md-6">
      <h2><?= $produk['product_name'] ?></h2>
      <p class="price">Rp.<?= number_format($produk['product_price'], 0, ',', '.') ?></p>
      <hr>
      <h5>Deskripsi:</h5>
      <p><?= nl2br($produk['description']) ?></p>
    </div>
  </div>
</div>

</body>
</html>
<?php include('includes/footer.php'); ?>