<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\prak5Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list-items', [ListItemController::class, 'tampilkan']);

Route::get('/prak5', [prak5Controller::class, 'index']);

Route::get('/list_product', [ListProdukController::class, 'show']);