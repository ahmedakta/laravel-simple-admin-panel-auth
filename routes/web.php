<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('home');
});
Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('users-detail', [App\Http\Controllers\AdminController::class, 'users_detail'])->name('users.detail');
    Route::get('customers', [App\Http\Controllers\AdminController::class, 'customers'])->name('customers');
    Route::get('products', [App\Http\Controllers\AdminController::class, 'products'])->name('products');
    Route::get('reports', [App\Http\Controllers\AdminController::class, 'reports'])->name('reports');
    Route::get('payments', [App\Http\Controllers\AdminController::class, 'payments'])->name('payments');
    Route::get('delivires', [App\Http\Controllers\AdminController::class, 'delivires'])->name('deliveries');
    Route::get('orders', [App\Http\Controllers\AdminController::class, 'orders'])->name('orders');
    Route::post('set-status', [App\Http\Controllers\AdminController::class, 'set_status'])->name('set.status');
});
    
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/verify', [App\Http\Controllers\HomeController::class, 'verify'])->name('verify');