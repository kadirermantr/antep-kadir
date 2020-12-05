<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    //return view('welcome');
    return view('products.index');
});
*/
Route::get('/', [\App\Http\Controllers\ProjeController::class, 'index']);
//Route::view('/', 'layouts.master');

Route::get('/hakkimda', [\App\Http\Controllers\HomeController::class, 'showMyAbout']);
Route::get('/kullanicilar', [\App\Http\Controllers\HomeController::class, 'showUsers']);
Route::get('/urunler', [\App\Http\Controllers\HomeController::class, 'showProducts']);
Route::get('/satislar', [\App\Http\Controllers\HomeController::class, 'showSales']);

/*
 * Product İşlemleri
 *
 */
Route::get('/create-product',[ProductController::class,'create'])->name('product.create');
Route::post('/save-product',[ProductController::class,'store'])->name('product.save');
Route::get('/show-product',[ProductController::class,'index'])->name('product.show');
