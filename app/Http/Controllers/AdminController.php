<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AdminController extends Controller
{
    public function admin()
    {
        $products = Product::all(); 
            return view('tampilan.admin', compact('products'));
    }
    
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'nama' => 'required',
                'berat' => 'required|numeric',
                'harga' => 'required|numeric',
                'stok' => 'required|numeric',
                'gambar' => 'required',
                'kondisi' => 'required',
                'deskripsi' => 'required',
            ], [
                'nama.required' => 'Nama produk harus diisi.',
                'berat.required' => 'Berat produk harus diisi.',
                'berat.numeric' => 'Berat produk harus berupa angka.',
                'harga.required' => 'Harga produk harus diisi.',
                'harga.numeric' => 'Harga produk harus berupa angka.',
                'stok.required' => 'Stok produk harus diisi.',
                'stok.numeric' => 'Stok produk harus berupa angka.',
                'kondisi.required' => 'Kondisi produk harus dipilih.',
                'gambar.required' => 'Deskripsi produk harus diisi.',
                'deskripsi.required' => 'Deskripsi produk harus diisi.',
            ]);
        $product = new Product();
   
        $product->Nama = $request->nama;
        $product->Harga = $request->harga;
        $product->Stok = $request->stok;
        $product->Berat = $request->berat;
        $product->Gambar = $request->gambar; 
        $product->Kondisi = $request->kondisi;
        $product->Deskripsi = $request->deskripsi;

        $product->save();
        $product = Product::all();
        return view('tampilan.admin')->with('products', $product);
            
    }
    public function delete($id)
    {
        Product::destroy($id);
        $products = Product::all(); 
        return view('tampilan.admin', compact('products'));
    }
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'gambar' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);
        $product = Product::find($id);
        $product->update($validatedData);     
        return redirect('/index/admin');
    }
}
