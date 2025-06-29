<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body { font-family: Arial; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>
    <h2>Invoice Pembelian PlayStation Store</h2>
    <table>
        <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
        <?php foreach ($keranjang as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td>Rp<?= number_format($item['price']) ?></td>
            <td><?= $item['qty'] ?></td>
            <td>Rp<?= number_format($item['price'] * $item['qty']) ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
