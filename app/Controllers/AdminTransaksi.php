<?php namespace App\Controllers;

class AdminTransaksi extends BaseController
{
    public function index()
    {
         if (!session()->get('admin')) {
        return redirect()->to('/');
    }
        $db = \Config\Database::connect();
        $data['transaksi'] = $db->table('transaksi')->orderBy('created_at', 'DESC')->get()->getResultArray();
        return view('admin/transaksi', $data);
    }

    public function detail($id)
    {
        $db = \Config\Database::connect();
        $data['transaksi'] = $db->table('transaksi')->where('id', $id)->get()->getRowArray();
        $data['detail'] = $db->table('detail_transaksi')->where('transaksi_id', $id)->get()->getResultArray();
        return view('admin/detail_transaksi', $data);
    }
}
