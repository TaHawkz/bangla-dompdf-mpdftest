<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/category-index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category-create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category-index/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::post('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');


// Route::get('/download-orders', [OrderController::class, 'downloadPdf']);

Route::get('/pdf', [OrderController::class, 'pdf']);

Route::get('/pdf/{id}', [OrderController::class, 'pdfShow'])->name('pdf.show');

