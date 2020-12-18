<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * Ürün listesini göreceğimiz yer
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        // $product=Product::all();
        //$products = Product::with(['user'])->get();
        //return view('products.index', compact('products'));


        //order by --> sıralama
        //desc --> sondan başa
        // asc --> baştan sonra
        // orderBy('id', 'desc)     orderByDesc('id')       latest('id)

        //$products = Product::with(['user'])->orderByDesc('id')->take(3)->get();
        //return view('home', compact('products'));


        return $products = Product::with(['user'])->get();
        // select('id', 'name');

        /*
        $products = Product::with(['user'])->paginate('5');
        return view('home', compact('products'));
        */
    }

    /**
     * Show the form for creating a new resource.
     * Ürün ekleme formu
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Categories::all();
        return  view('products.create', compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     * Db kaydı
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $description=$request->get('description');
        $price=$request->get('price');
        $created_by = User::find(1);

        Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'created_by' => $created_by->id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function export() {
        return Excel::download(new ProductExport, 'products.xlsx');
    }

    public function bannerShow() {
        Product::with(['photo'])->get();
        //yeni bir veritabanı tablosu oluştur

    }
}
