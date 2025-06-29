<?php namespace App\Controllers;

class Checkout extends BaseController
{
    public function index()
    {
        return view('checkout');
    }

    public function simpan()
    {
        $db = \Config\Database::connect();
        $keranjang = session()->get('keranjang') ?? [];
        $total = 0;

        foreach ($keranjang as $item) {
            $total += $item['price'] * $item['qty'];
        }

        // Simpan transaksi
        $db->table('transaksi')->insert([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'total' => $total
        ]);

        $transaksi_id = $db->insertID();

        // Simpan detail transaksi
        foreach ($keranjang as $item) {
            $db->table('detail_transaksi')->insert([
                'transaksi_id' => $transaksi_id,
                'nama_produk' => $item['name'],
                'harga' => $item['price'],
                'qty' => $item['qty'],
                'subtotal' => $item['price'] * $item['qty']
            ]);
        }

        session()->remove('keranjang');
        return redirect()->to('/')->with('pesan', 'Pesanan berhasil disimpan!');
    }
}
