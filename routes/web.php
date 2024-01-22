<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\HeaderController;

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
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/footer', [AdminController::class, 'footer'])->name('footer');
    Route::get('admin/Contact', [AdminController::class, 'Contact'])->name('Contact');
    Route::get('admin/AboutUs', [AdminController::class, 'aboutUs'])->name('AboutUs');
    Route::get('admin/image/gallary', [MediaController::class,'imageGallary'])->name('ImageGallary');
    Route::get('admin/video/gallary', [MediaController::class,'videoGallary'])->name('VideoGallary'); 
    Route::get('admin/Header', [HeaderController::class, 'header'])->name('Header');
    Route::get('admin/table-header', [HeaderController::class, 'headerTable'])->name('table-header');
    Route::post('admin/EditHeader', [HeaderController::class, 'editHeader'])->name('editheader');
    Route::post('admin/createheader', [HeaderController::class, 'createHeader'])->name('createheader');
});

require __DIR__.'/auth.php';


