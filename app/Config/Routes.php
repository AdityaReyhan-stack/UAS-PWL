<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('keranjang/tambah', 'Keranjang::tambah');
$routes->get('keranjang', 'Keranjang::index');
$routes->get('keranjang/hapus/(:num)', 'Keranjang::hapus/$1');
$routes->get('keranjang/kosongkan', 'Keranjang::kosongkan');
$routes->get('keranjang/invoice', 'Keranjang::invoice');
$routes->get('produk', 'Produk::index');
$routes->get('produk/tambah', 'Produk::tambah');
$routes->post('produk/simpan', 'Produk::simpan');
$routes->get('produk/edit/(:num)', 'Produk::edit/$1');
$routes->post('produk/update/(:num)', 'Produk::update/$1');
$routes->get('produk/hapus/(:num)', 'Produk::hapus/$1');
$routes->get('login', 'Auth::login');
$routes->post('login/proses', 'Auth::proses');
$routes->get('logout', 'Auth::logout');
$routes->get('checkout', 'Checkout::index');
$routes->post('checkout/simpan', 'Checkout::simpan');
$routes->get('admin/transaksi', 'AdminTransaksi::index');
$routes->get('admin/transaksi/(:num)', 'AdminTransaksi::detail/$1');



