<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class HasilController extends Controller
{
    public function hasil(Request $request)
        {
            $products = Product::all(); 
            return view('tampilan.hasil', compact('products'));
        
            
    }
}
