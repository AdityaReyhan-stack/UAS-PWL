<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>🛒 Keranjang Belanja</h2>

<?php if (!empty($keranjang)): ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($keranjang as $item): ?>
        <tr>
            <td><?= esc($item['name']) ?></td>
            <td>Rp<?= number_format($item['price']) ?></td>
            <td><?= $item['qty'] ?></td>
            <td>Rp<?= number_format($item['price'] * $item['qty']) ?></td>
            <td>
                <a href="/keranjang/hapus/<?= $item['id'] ?>" class="button-link" onclick="return confirm('Hapus produk ini?')">❌ Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

    <br>
    <a href="/keranjang/kosongkan" class="button-link" onclick="return confirm('Kosongkan seluruh keranjang?')">🧺 Kosongkan Keranjang</a>
    <a href="/checkout" class="button-link">🛍️ Lanjut ke Checkout</a> 
    <a href="/keranjang/invoice" target="_blank" class="button-link">🧾 Cetak Invoice</a>
    <a href="/" class="button-link">← Kembali Belanja</a>

<?php else: ?>
    <p>Keranjang kamu kosong 💤</p>
    <a href="/" class="button-link">← Belanja Sekarang</a>
<?php endif; ?>

<?= $this->endSection() ?>
