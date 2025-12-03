<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 6 produk terbaru untuk halaman depan
        $products = Product::latest()->take(6)->get();
        return view('welcome', compact('products'));
    }
}
