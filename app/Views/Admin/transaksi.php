<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>🧾 Daftar Transaksi</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Total</th>
        <th>Waktu</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($transaksi as $t): ?>
    <tr>
        <td><?= esc($t['nama']) ?></td>
        <td><?= esc($t['email']) ?></td>
        <td><?= esc($t['alamat']) ?></td>
        <td>Rp<?= number_format($t['total']) ?></td>
        <td><?= $t['created_at'] ?></td>
        <td>
            <a href="/admin/transaksi/<?= $t['id'] ?>" class="button-link">🔍 Detail</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<?= $this->endSection() ?>
