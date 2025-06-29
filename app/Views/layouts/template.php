<!DOCTYPE html>
<html>
<head>
  <title>PS Store</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>

<body>

<nav>
  <img src="/assets/img/logo.png" width="40" style="vertical-align: middle;">
  <a href="/">Home</a> |
  <a href="/produk">Produk</a> |
  <a href="/keranjang">Keranjang</a> |
  <?php if (session()->get('admin')): ?>
    <a href="/logout">Logout</a>
  <?php else: ?>
    <a href="/login">Login Admin</a>
  <?php endif ?>
</nav>

<hr>

<div class="container">
  <?= $this->renderSection('content') ?>
</div>

</body>
</html>
