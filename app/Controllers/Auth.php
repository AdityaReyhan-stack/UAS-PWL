<?php namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

public function proses()
{
    $admin = new \App\Models\AdminModel();
    $data = $admin->where('username', $this->request->getPost('username'))->first();

    if ($data && password_verify($this->request->getPost('password'), $data['password'])) {
        session()->set('admin', true);
        return redirect()->to('/');
    }

    return redirect()->back()->with('error', 'Username atau password salah!');
}




    public function logout()
    {
        session()->remove('admin');
        return redirect()->to('/');
    }
}
