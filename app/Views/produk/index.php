<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h1>Daftar Produk</h1>

<?php if (empty($produk)): ?>
    <p>Belum ada produk untuk ditampilkan.</p>
<?php else: ?>
    <?php foreach($produk as $p): ?>
        <div class="product-card">
            <img src="/assets/img/<?= $p['gambar'] ?>" width="120">
            <h3><?= $p['nama'] ?></h3>
            <p>Rp<?= number_format($p['harga']) ?></p>
            <?php if (session()->get('admin')): ?>
                <a href="/produk/edit/<?= $p['id'] ?>" class="button-link">✏️ Edit</a>
                <a href="/produk/hapus/<?= $p['id'] ?>" class="button-link">🗑️ Hapus</a>
            <?php endif ?>
        </div>
    <?php endforeach ?>
<?php endif; ?>

<?= $this->endSection() ?>
