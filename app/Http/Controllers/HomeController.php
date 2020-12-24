<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showMyAbout() {
        $name = "Kadir";
        $job = "Bilgisayar Mühendisliği";
        $city = "Bursa";

        return view('hakkimda', compact('name', 'job', 'city'));
    }

    function showUsers() {
        //$users =  DB::table('users')->get();
        $users = User::all();
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
            ->select('user_products.*', 'users.name', 'products.productName', 'products.price')
            ->get();

        return view('satislar', compact('sales'));

        //die();
        //dd($sales);
    }

    function forgottenPassword() {
        $users = User::all();
        return view('auth.forgot-password', compact('users'));
    }

}
