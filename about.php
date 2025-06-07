<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Kami - Toko Baju</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .about-section {
    background: linear-gradient(to bottom left,rgb(171, 171, 171), rgb(79, 79, 79)); /* warna senada banner */
    color: white;
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
  </style>
</head>
<body>

<section class="about-section">
<div class="container py-5">
  <h2 class="mb-4 text-center">Tentang QClothes</h2>
  <p class="lead text-center">
    Website <strong>QClothes

    </strong> adalah aplikasi e-commerce berbasis website sederhana yang dibuat untuk memenuhi kebutuhan belajar dan praktik membuat aplikasi CRUD menggunakan PHP, MySQL, dan Bootstrap 5.
    Situs ini dibuat dengan pendekatan modern dan responsif untuk pengalaman pengguna yang optimal. Website ini tidak hanya sebagai latihan teknis, tetapi juga sebagai contoh nyata integrasi antar komponen frontend dan backend, yang sangat penting dalam pengembangan aplikasi web profesional.

  </p>

  <hr class="my-5">

  <h4 class="text-center mb-4">Tim Pengembang</h4>
  <div class="row justify-content-center">

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="img/kangelang.jpg" class="profile-img" alt="Desainer Web">
        <div class="card-body">
          <h5 class="card-title">R. Airlangga Dewanata</h5>
          <p class="card-text">Web Designer</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="img/kangadit.jpg" class="profile-img" alt="UI/UX Designer">
        <div class="card-body">
          <h5 class="card-title">M. Aditya Firmansyah</h5>
          <p class="card-text">UI/UX Designer</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="img/kangiko.jpg" class="profile-img" alt="Frontend Dev">
        <div class="card-body">
          <h5 class="card-title">Bryan Iko Rismaputra</h5>
          <p class="card-text">Front-end Developer</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card profile-card text-center">
        <img src="img/kangezki.jpg" class="profile-img" alt="Backend Dev">
        <div class="card-body">
          <h5 class="card-title">Thamarezki F.Zahran</h5>
          <p class="card-text">Back-end Developer</p>
        </div>
      </div>
    </div>
</section>
  </div>
</div>
</body>
</html>

<?php include('includes/footer.php'); ?>
