<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index'])->name('user.index');
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/setor-sampah',[UserController::class,'create'])->name('user.create');
    Route::post('/',[UserController::class,'storeCreate'])->name('user.storeCreate');
    Route::get('/membeli-sampah',[UserController::class,'beli'])->name('user.beli');
    Route::get('/list',[UserController::class,'list'])->name('user.list');
    Route::get('/tes',[UserController::class,'tes']);
    Route::get('/detail/{item}',[UserController::class,'show'])->name('user.show');
    Route::patch('/membeli-{sampah}',[UserController::class,'terbeli'])->name('user.terbeli');
    Route::middleware(['admin'])->group(function(){
        Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
        Route::get('/admin-dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/admin-tambah-data',[AdminController::class,'create'])->name('admin.create');
        Route::post('/admin',[AdminController::class,'store'])->name('admin.store');
        Route::get('/admin-edit-{item}',[AdminController::class,'edit'])->name('admin.edit');
        Route::patch('/admin-update-{sampah}',[AdminController::class,'update'])->name('admin.update');
        Route::delete('/admin-delete-{item}',[AdminController::class,'destroy'])->name('admin.destroy');
        Route::get('/admin-list-plastik',[AdminController::class,'listPlastik'])->name('admin.plastik');
        Route::get('/admin-list-organik',[AdminController::class,'listOrganik'])->name('admin.organik');
    });
    Route::get('logout',function(){
        Auth::logout();
        redirect('/');
    });
});

