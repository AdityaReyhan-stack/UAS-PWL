<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h1 style="text-align: center;">🎮 Selamat Datang di PS Store 🎮</h1>
<p style="text-align: center;">
  Toko online resmi perlengkapan dan konsol PlayStation.  
  Temukan berbagai produk PlayStation original dengan harga terbaik!
</p>

<hr>

<h2>🔥 Produk Terbaru</h2>

<?php if (empty($produk)): ?>
    <p>Tidak ada produk tersedia saat ini.</p>
<?php else: ?>
<div style="display: flex; flex-wrap: wrap; gap: 20px;">
    <?php foreach($produk as $p): ?>
        <div class="product-card">
            <img src="/assets/img/<?= $p['gambar'] ?>" width="150">
            <h3><?= $p['nama'] ?></h3>
            <p>Rp<?= number_format($p['harga']) ?></p>

            <form action="/keranjang/tambah" method="post">
                <input type="hidden" name="id" value="<?= $p['id'] ?>">
                <input type="hidden" name="name" value="<?= $p['nama'] ?>">
                <input type="hidden" name="price" value="<?= $p['harga'] ?>">
                <button type="submit">🛒 Beli</button>
            </form>
        </div>
    <?php endforeach ?>
</div>
<?php endif; ?>

<?= $this->endSection() ?>
