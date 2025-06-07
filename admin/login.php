<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 400px;">
  <h4 class="mb-3">Login Admin</h4>
  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger"><?= $_GET['error'] ?></div>
  <?php endif; ?>
  <form action="../proses/login_proses.php" method="POST">
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
  <a href="../index.php" class="btn btn-warning w-100">Back</a>
  </form>
</div>
</body>
</html>