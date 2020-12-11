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
 *  Product İşlemleri
 */
//Route::get('/show-products', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
//Route::get('/create-products', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
//Route::get('/save-products', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.save');
Route::get('/export-products', [\App\Http\Controllers\ProductController::class, 'export'])->name('product.export');


/*
 *  Slider İşlemleri
 */
Route::get('/show-sliders', [\App\Http\Controllers\SliderController::class, 'index'])->name('slider.index');
Route::get('/delete-slider/{id}', [\App\Http\Controllers\SliderController::class, 'destroy'])
    ->name('delete.slider')->where(array('id' => '[0-9]+'));


/*
 * Kategori İşlemler
 */
Route::get('/upload-categories', [\App\Http\Controllers\CategoryController::class, 'upload'])->name('category.upload');
Route::post('/import-categories', [\App\Http\Controllers\CategoryController::class, 'import'])->name('category.import');

