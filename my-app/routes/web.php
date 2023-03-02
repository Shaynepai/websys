<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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



Route::get('/', [MainController::class, 'index'])->name('products.index');
Route::get('/pageone', [MainController::class, 'pageone'])->name('products.index');



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/fancyprod', function () {
//     return view('pages/fancyprod');
// });

// Route::get('/saleitem', function () {
//     return view('pages/saleitem');
// });

// Route::get('/specialitem', function () {
//     return view('pages/specialitem');
// });
