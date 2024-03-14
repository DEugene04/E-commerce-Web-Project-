<?php

use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/add-baju', [SaleController::class, 'add']);
Route::post('/store-baju', [SaleController::class, 'store']);

Route::get('/', [SaleController::class, 'read']);
Route::get('/edit-baju/{id}', [SaleController::class, "edit"]);
Route::patch('/update-baju/{id}', [SaleController::class, 'update']);
Route::delete('/delete-baju/{id}', [SaleController::class, 'delete']);