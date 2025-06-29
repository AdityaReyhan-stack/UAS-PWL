<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h1>Edit Produk</h1>

<form action="/produk/update/<?= $produk['id'] ?>" method="post" enctype="multipart/form-data">
    <p>Nama Produk:</p>
    <input type="text" name="nama" value="<?= $produk['nama'] ?>" required>

    <p>Harga:</p>
    <input type="number" name="harga" value="<?= $produk['harga'] ?>" required>

    <p>Deskripsi:</p>
    <textarea name="deskripsi"><?= $produk['deskripsi'] ?></textarea>

    <p>Gambar Saat Ini:</p>
    <img src="/assets/img/<?= $produk['gambar'] ?>" width="120">

    <p>Ganti Gambar (opsional):</p>
    <input type="file" name="gambar">

    <br><br>
    <button type="submit">💾 Simpan Perubahan</button>
    <a href="/produk" class="button-link">← Kembali</a>
</form>

<?= $this->endSection() ?>
