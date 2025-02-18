<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/contact-post',[HomeController::class, 'contactPost'])->name('contact-post');
Route::get('/gallery',[HomeController::class, 'gallery'])->name('gallery');


Route::get('login',[LoginController::class, 'login'])->name('admin.login');
Route::get('logout',[LoginController::class, 'logout'])->name('admin.logout');
Route::post('login-post',[LoginController::class, 'loginPost'])->name('admin.login-post');

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard',[AdminController::class, 'index'])->name('index');

    //gallery
    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function()
    {
        Route::get('list', [GalleryController::class, 'index'])->name('index');
        Route::get('listing', [GalleryController::class, 'listing'])->name('listing');
        Route::get('create', [GalleryController::class, 'create'])->name('create');
        Route::post('store', [GalleryController::class, 'store'])->name('store');
        Route::get('edit/{id}', [GalleryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::post('delete', [GalleryController::class, 'delete'])->name('delete');
    });

});


