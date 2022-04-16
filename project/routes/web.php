<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Category\Show as CategoriesShow;
use App\Http\Livewire\Product\Show as ProductsShow;
use App\Http\Livewire\Delivery\Show as DeliveriesShow;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', Home::class);

// category page
Route::get('/categories', CategoriesShow::class)-> name('categories');

// product page
Route::get('/products', ProductsShow::class)-> name('products');

// delivery page
Route::get('/deliveries', DeliveriesShow::class)-> name('deliveries');