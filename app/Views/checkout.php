<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>Checkout</h2>

<form action="/checkout/simpan" method="post">
    <p>Nama:</p>
    <input type="text" name="nama" required class="form-input">

    <p>Email:</p>
    <input type="email" name="email" required class="form-input">

    <p>Alamat:</p>
    <textarea name="alamat" required class="form-input"></textarea>


    <br><br>
    <button type="submit">🧾 Konfirmasi Pesanan</button>
    <a href="/keranjang" class="button-link">← Kembali ke Keranjang</a>
</form>

<?= $this->endSection() ?>
