<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showUsers() {
        $users =  DB::table('users')->get();
        return view('kullanicilar', compact('users'));
    }

    function showProducts() {
        $products =  DB::table('products')->get();
        return view('urunler', compact('products'));
    }

    function showSales() {
        $sales =  DB::table('user_products')
            ->join('users', 'user_products.user_id', '=', 'users.id')
            ->join('products', 'user_products.product_id', '=', 'products.id')
            ->select('user_products.*', 'users.name', 'products.pName', 'products.price')
            ->get();

            return view('satislar', compact('sales'));

            //die();
            //dd($sales);

    }
}
