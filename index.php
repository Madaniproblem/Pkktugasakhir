<?php include('includes/header.php'); ?>
<?php include 'connectionsql/sqlconnection.php'; ?>
<!-- Hero Banner -->
<section class="hero">
  <h1>Selamat Datang di QClothes</h1>
  <p>Temukan berbagai model baju terbaru & stylish untuk semua kalangan.</p>
  <a href="produk.php" class="btn btn-warning btn-lg">Lihat Semua Produk</a>
</section>




</div>
<section class="produk-section py-5 bg-light">
  <div class="container">
    <h3 class="mb-5 text-center">Produk Kami</h3>
    <div class="row g-4">
      <?php
      // Ambil 5 produk terbaru
      $produk = $conns->query("SELECT * FROM products ORDER BY id_product DESC");
      while ($row = $produk->fetch_assoc()):
      ?>
        <div class="col-md-4 col-sm-6">
          <div class="card card-product h-100 shadow-sm border-0">
            <img src="img/<?= $row['product_img'] ?>" class="card-img-top" alt="<?= $row['product_name'] ?>" style="height: 350px; object-fit: cover; ">
            <div class="card-body">
              <h5 class="card-title"><?= $row['product_name'] ?></h5>
              <p class="card-text text-orange fw-bold">Rp.<?= number_format($row['product_price'], 0, ',', '.') ?></p>
              <a href="detail_produk.php?id_product=<?= $row['id_product'] ?>" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>

  </div>
</section>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Kami - Toko Baju</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS (wajib untuk slider) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
     body {
      background-color:rgb(255, 255, 255);
      font-family: 'Segoe UI', sans-serif;
    }
    .produk-section {
    background: linear-gradient(to bottom right,rgb(79, 79, 79),rgb(171, 171, 171)); /* warna senada banner */
    color: white;
    }
    .about-section {
    background: linear-gradient(to bottom left,rgb(171, 171, 171), rgb(79, 79, 79)); /* warna senada banner */
    color: white;
    }
    .hero {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('img/banner.png') center/cover no-repeat;
      color: white;
      padding: 100px 20px;
      text-align: center;
    }
    .hero h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .profile-card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .profile-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
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
</body>
</html>
<?php include('includes/footer.php'); ?>
