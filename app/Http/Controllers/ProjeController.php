<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProjeController extends Controller
{
    public function index() {
        $categories = Categories::all();
        $products = Product::all();
        return view('products.index', compact('categories', 'products'));
    }

}
