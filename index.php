<?php include('includes/header.php'); ?>
<?php include 'connectionsql/sqlconnection.php'; ?>
<!-- Hero Banner -->
<section class="hero">
  <h1>Selamat Datang di Toko Baju</h1>
  <p>Temukan berbagai model baju terbaru & stylish untuk semua kalangan.</p>
  <a href="produk.php" class="btn btn-warning btn-lg">Lihat Semua Produk</a>
</section>




</div>
<section class="produk-section py-5 bg-light">
  <div class="container">
    <h3 class="mb-4 text-center">Produk Terbaru</h3>
    <div class="row g-4">
      <?php
      // Ambil 5 produk terbaru
      $produk = $conn->query("SELECT * FROM produk ORDER BY id DESC LIMIT 5");
      while ($row = $produk->fetch_assoc()):
      ?>
        <div class="col-md-4 col-sm-6">
          <div class="card card-product h-100 shadow-sm border-0">
            <img src="img/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['nama_produk'] ?>" style="height: 250px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
              <p class="card-text text-orange fw-bold">Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
              <a href="detail_produk.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>

    <div class="text-center mt-5">
      <a href="produk.php" class="btn btn-primary">Lihat Semua Produk</a>
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
<section class="about-section">
<div class="container py-5">
  <h2 class="mb-4 text-center">Tentang Toko Baju</h2>
  <p class="lead text-center">
    Website <strong>Toko Baju</strong> adalah platform e-commerce sederhana yang dibuat untuk memenuhi kebutuhan belajar dan praktik membuat aplikasi CRUD menggunakan PHP, MySQL, dan Bootstrap 5. Situs ini dibuat dengan pendekatan modern dan responsif untuk pengalaman pengguna yang optimal.
  </p>

  <hr class="my-5">

  <h4 class="text-center mb-4">Tim Pengembang</h4>
  <div class="row justify-content-center">

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="https://picsum.photos/300/200?random=1" class="profile-img" alt="Desainer Web">
        <div class="card-body">
          <h5 class="card-title">R. Airlangga Dewanata</h5>
          <p class="card-text">Desainer Web</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="https://picsum.photos/300/200?random=1" class="profile-img" alt="UI/UX Designer">
        <div class="card-body">
          <h5 class="card-title">M. Aditya Firmansyah</h5>
          <p class="card-text">UI/UX Designer</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="https://picsum.photos/300/200?random=1" class="profile-img" alt="Frontend Dev">
        <div class="card-body">
          <h5 class="card-title">Bryan Iko Rismaputra</h5>
          <p class="card-text">Frontend Developer</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="https://picsum.photos/300/200?random=1" class="profile-img" alt="Backend Dev">
        <div class="card-body">
          <h5 class="card-title">Thamarezki Febyanda Zahran</h5>
          <p class="card-text">Backend Developer</p>
        </div>
      </div>
    </div>
</section>
  </div>
</div>

</body>
</html>



<?php include('includes/footer.php'); ?>
