<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, "home"]);
Route::get('/register', [AuthController::class, "daftar"]);

Route::post('/welcome', [AuthController::class, "kirim"]);

// Route::get('/master', function(){
//     return view('page.layout.master');
// });

Route::get('/table', function(){
    return view('page.table');
});

Route::get('/data-tables', function(){
    return view('page.data-tables');
});
