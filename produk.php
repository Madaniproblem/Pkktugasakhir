<?php include('includes/header.php'); ?>
<?php include 'connectionsql/sqlconnection.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk | Toko Baju</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
  .produk-section {
    background: linear-gradient(to bottom right,rgb(79, 79, 79),rgb(171, 171, 171)); /* warna senada banner */
    color: white;
    }
    .card-product {
      border: none;
      transition: transform .2s;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 12px;
    }
    .card-product:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .card-product img {
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      height: 250px;
      object-fit: cover;
    }
    .price-tag {
      font-weight: bold;
      color: #e67e22;
    }
  </style>
</head>
<body>

<section class="produk-section">
<div class="container py-5">
  <h2 class="mb-4 text-center">Daftar Produk Kami</h2>
  <div class="row g-4">
    <?php
    $produk = $conns->query("SELECT * FROM products ORDER BY id_product DESC");
    while ($row = $produk->fetch_assoc()):
    ?>
      <div class="col-md-4 col-sm-6">
        <div class="card card-product h-100">
          <img src="img/<?= $row['product_img'] ?>" class="card-img-top" style="height:350px" alt="<?= $row['product_name']  ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row['product_name'] ?></h5>
            <p class="card-text price-tag">Rp <?= number_format($row['product_price'], 0, ',', '.') ?></p>
            <a href="detail_produk.php?id_product=<?= $row['id_product'] ?>" class="btn btn-outline-primary w-100">Lihat Detail</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
</section>
</body>
</html>
<?php include('includes/footer.php'); ?>