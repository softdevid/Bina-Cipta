<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index', [
            'title' => 'Beranda | BINA CIPTA',
            "products" => Product::all()
        ]);
    }
    public function produk()
    {
        return view('Home.produk', [
            'title' => 'Produk | BINA CIPTA',
            "products" => Product::all(),
        ]);
    }
    public function faq()
    {
        return view('Home.faq', [
            'title' => 'FAQ | BINA CIPTA',
        ]);
    }
    public function tentang_kami()
    {
        return view('Home.tentang-kami', [
            'title' => 'Tentang Kami | BINA CIPTA',
        ]);
    }
    public function kontak_kami()
    {
        return view('Home.kontak-kami', [
            'title' => 'Kontak Kami | BINA CIPTA',
        ]);
    }
    public function pembayaran()
    {
        return view('Home.pembayaran', [
            'title' => 'Via Pembayaran | BINA CIPTA',
        ]);
    }
    public function kebijakan()
    {
        return view('Home.kebijakan', [
            'title' => 'Kebijakan Pribadi | BINA CIPTA',
        ]);
    }
    public function syarat()
    {
        return view('Home.syarat', [
            'title' => 'Syarat Ketentuan | BINA CIPTA',
        ]);
    }
    public function detail($id)
    {
        return view('Home.detail', [
            'title' => 'Detail Produk | BINA CIPTA',
            "products" => Product::find($id)
        ]);
    }
    public function detail2($id)
    {
        return view('Home.detail2', [
            'title' => 'Detail Produk | BINA CIPTA',
            "products" => Product::find($id)
        ]);
    }
    public function kategori($id)
    {

        return view('Home.kategori', [
            'title' => 'Kategori Product | BINA CIPTA',
            "products" => Product::where('kategori', $id)->get()
        ]);
    }
    public function shop()
    {

        return view('Home.shop', [
            'title' => 'Cara Membeli | BINA CIPTA',

        ]);
    }
}