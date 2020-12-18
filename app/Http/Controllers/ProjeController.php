<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProjeController extends Controller
{
    public function index() {
        $categories = Categories::all();
        $products = Product::all();
        $banners = Banner::all();
        $blogs = Blog::all();
        //dd($banners);
        return view('products.index', compact('categories', 'products', 'banners', 'blogs'));
    }

}
