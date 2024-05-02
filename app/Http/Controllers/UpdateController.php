<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateController extends Controller
{
    public function update($id)
    {
        $product = Product::find($id);
        return view('tampilan.update', compact('product'));
    }
}
