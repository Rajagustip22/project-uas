<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategoriproduk.kategori', ['kategori_produk' => $kategori_produk->getAllData()]);
    }

    
    public function create()
    {
         // tampilkan data table kategori produk
         $kategori_produk = KategoriProduk::all();
         return view('admin.kategoriproduk.create', compact('kategori_produk'));
    }

    
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk();
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('admin/kategori');
        
    }

    
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id',$id)->delete();
        return redirect('admin/kategori');
    }
}
