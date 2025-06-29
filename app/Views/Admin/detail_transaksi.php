<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>📋 Detail Transaksi</h2>

<p><strong>Nama:</strong> <?= esc($transaksi['nama']) ?></p>
<p><strong>Email:</strong> <?= esc($transaksi['email']) ?></p>
<p><strong>Alamat:</strong> <?= esc($transaksi['alamat']) ?></p>
<p><strong>Total:</strong> Rp<?= number_format($transaksi['total']) ?></p>
<p><strong>Waktu:</strong> <?= $transaksi['created_at'] ?></p>

<h3>🛍️ Produk Dipesan</h3>
<table border="1" cellpadding="8">
    <tr>
        <th>Produk</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Subtotal</th>
    </tr>
    <?php foreach ($detail as $d): ?>
    <tr>
        <td><?= esc($d['nama_produk']) ?></td>
        <td>Rp<?= number_format($d['harga']) ?></td>
        <td><?= $d['qty'] ?></td>
        <td>Rp<?= number_format($d['subtotal']) ?></td>
    </tr>
    <?php endforeach ?>
</table>

<a href="/admin/transaksi" class="button-link">← Kembali ke Transaksi</a>

<?= $this->endSection() ?>
