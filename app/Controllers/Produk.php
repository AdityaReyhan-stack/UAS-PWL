<?php namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
public function index()
{
    $model = new \App\Models\ProdukModel();
    $data['produk'] = $model->findAll();
    return view('produk/index', $data);
}

    public function tambah()
    {
        return view('produk/tambah');
    }

    public function simpan()
    {
        $file = $this->request->getFile('gambar');

        $namaGambar = ($file->isValid() && !$file->hasMoved()) 
            ? $file->getRandomName() : 'default.jpg';

        $file->move('assets/img', $namaGambar);

        $produk = new ProdukModel();
        $produk->insert([
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to('/produk');
    }

    public function edit($id)
    {
        if (!session()->get('admin')) {
        return redirect()->to('/')->with('error', 'Akses ditolak.');
        }
            $model = new \App\Models\ProdukModel();
            $data['produk'] = $model->find($id);
        return view('produk/edit', $data);
    }


    public function update($id)
    {
        $produk = new ProdukModel();
        $dataLama = $produk->find($id);

        $file = $this->request->getFile('gambar');

        $namaGambar = ($file->isValid() && !$file->hasMoved())
            ? $file->getRandomName() : $dataLama['gambar'];

        if ($file->isValid() && !$file->hasMoved()) {
            $file->move('assets/img', $namaGambar);
        }

        $produk->update($id, [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to('/produk');
    }

    public function hapus($id)
    {
        $produk = new ProdukModel();
        $data = $produk->find($id);

        if ($data && file_exists('assets/img/' . $data['gambar'])) {
            unlink('assets/img/' . $data['gambar']);
        }

        $produk->delete($id);
        return redirect()->to('/produk');
    }
}
