<?php namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController {
    public function index() {
        try {
            $model = new ProdukModel();
            $data['produk'] = $model->findAll();
            return view('home/index', $data);
        } catch (\Throwable $e) {
            echo "<pre>" . $e->getMessage() . "</pre>";
            // atau log_message('error', $e->getMessage());
        }
    }
}
