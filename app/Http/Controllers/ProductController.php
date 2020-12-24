<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Helpers\UploadPaths;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
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
        //
        //$products = Product::with(['user'])->get();
        //return view('products.index', compact('products'));


        //order by --> sıralama
        //desc --> sondan başa
        // asc --> baştan sonra
        // orderBy('id', 'desc)     orderByDesc('id')       latest('id)

        //$products = Product::with(['user'])->orderByDesc('id')->take(3)->get();
        //

        $products = Product::all();
        return view('urunler',compact('products'));
        //return $products = Product::with(['user'])->get();
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
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $users = User::all();
        $categories = Categories::all();
        return view('products.create', compact('categories', 'users'));
    }

    public function save(Request $request) {
        $productName = $request->get('product_name');
        $productPrice = $request->get('price');
        $productCategory = $request->get('category_id');
        $fileUrl = $request->file('photo');
        $createdBy = $request->get('user_id');     // current user kimse onun id'si gelmeli    auth()->user()->id,

        if (isset($fileUrl)) {
            $productPhotoName = uniqid('product_'). '.' . $fileUrl->getClientOriginalExtension();
            $fileUrl->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
        }

        else {
            $productPhotoName = ''; //default değer burada yapılabilir
        }

        Product::create([
            'productName' => $productName,
            'price' => $productPrice,
            'photo' => $productPhotoName,
            'created_by' => $createdBy,
            'category_id' => $productCategory,
        ]);

        return back();
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
