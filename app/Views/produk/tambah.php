<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h1>Tambah Produk</h1>

<form action="/produk/simpan" method="post" enctype="multipart/form-data">
    <p>Nama Produk:</p>
    <input type="text" name="nama" required>

    <p>Harga:</p>
    <input type="number" name="harga" required>

    <p>Deskripsi:</p>
    <textarea name="deskripsi"></textarea>

    <p>Upload Gambar:</p>
    <input type="file" name="gambar" required>

    <br><br>
    <button type="submit">💾 Simpan</button>
    <a href="/produk" class="button-link">← Kembali</a>
</form>

<?= $this->endSection() ?>
