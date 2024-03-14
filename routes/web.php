<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\OtherProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/add-baju', [SaleController::class, 'add'])->middleware('auth','admin');
Route::post('/store-baju', [SaleController::class, 'store']);

Route::get('/', [SaleController::class, 'read']);
Route::get('/edit-baju/{id}', [SaleController::class, "edit"]);
Route::patch('/update-baju/{id}', [SaleController::class, 'update']);
Route::delete('/delete-baju/{id}', [SaleController::class, 'delete']);

Route::get('/add-newProduct', [NewProductController::class, 'addNewProduct'])->middleware('auth','admin');
Route::post('/store-newProduct', [NewProductController::class, 'storeNewProduct']);
Route::get('/edit-newest-product/{id}', [NewProductController::class, "edit"]);
Route::patch('/update-newest-product/{id}', [NewProductController::class, 'update']);
Route::delete('/delete-newest-product/{id}', [NewProductController::class, 'delete']);


Route::get('/add-otherProduct', [OtherProductController::class, 'addOtherProduct'])->middleware('auth','admin');
Route::post('/store-otherProduct', [OtherProductController::class, 'storeOtherProduct']);
Route::get('/edit-other-product/{id}', [OtherProductController::class, "edit"]);
Route::patch('/update-other-product/{id}', [OtherProductController::class, 'update']);
Route::delete('/delete-other-product/{id}', [OtherProductController::class, 'delete']);


Route::get('/adminPanel', [SaleController::class, 'readAdmin']) ->middleware('auth','admin');
Route::get('/adminPanelSale', [SaleController::class, 'readAdminSale']) ->middleware('auth','admin');


Route::get('/NewProductDetail/{id}', [NewProductController::class, 'readProductDetail']);
Route::get('/OtherProductDetail/{id}', [OtherProductController::class, 'readProductDetail']);
Route::get('/SaleProductDetail/{id}', [SaleController::class, 'readProductDetail']);
