<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class FrontendController extends Controller
{
    public function index(){
        $produk = new Produk();
        return view('frontend.home', ['produk' => $produk->getAllData()]);
    }

    public function about(){
        return view('frontend/about/about');
    }

    public function produk(){
        $produk = new Produk();
        return view('frontend.produk.produk', ['produk' => $produk->getAllData()]);
    }
}
