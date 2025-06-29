<?php namespace App\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;


class Keranjang extends BaseController
{
public function invoice()
{
    $session = session();
    $keranjang = $session->get('keranjang') ?? [];

    $html = view('invoice', ['keranjang' => $keranjang]);

    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('invoice.pdf', ['Attachment' => false]);
}


    public function index()
    {
        $session = session();
        $data['keranjang'] = $session->get('keranjang') ?? [];
        return view('keranjang', $data);
    }

    public function tambah()
    {
        $session = session();
        $keranjang = $session->get('keranjang') ?? [];

        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');

        if (isset($keranjang[$id])) {
            $keranjang[$id]['qty'] += 1;
        } else {
            $keranjang[$id] = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'qty' => 1
            ];
        }

        $session->set('keranjang', $keranjang);
        return redirect()->to('/keranjang');
    }
    public function hapus($id)
{
    $session = session();
    $keranjang = $session->get('keranjang') ?? [];

    if (isset($keranjang[$id])) {
        unset($keranjang[$id]);
        $session->set('keranjang', $keranjang);
    }

    return redirect()->to('/keranjang');
}

public function kosongkan()
{
    session()->remove('keranjang');
    return redirect()->to('/keranjang');
    
}

}
