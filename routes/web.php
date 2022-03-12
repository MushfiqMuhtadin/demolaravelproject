<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignupController;
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
    return view('welcome');
});

Route::get('admin', [Admincontroller::class, 'adminget'])->name('admin');
Route::post('admin/auth', [Admincontroller::class, 'auth'])->name('admin.auth');
Route::get('signup', [signupcontroller::class, 'signupget'])->name('signup');
Route::post('signup', [Signupcontroller::class, 'signuppost'])->name('signup');
Route::get('userscrud', [Admincontroller::class, 'crudget'])->name('userscrud');

Route::get('/edit/{id}', [Admincontroller::class, 'editget'])->name('edit');
Route::put('/edit/{id}', [Admincontroller::class, 'updatepost'])->name('update');
Route::get('/delete/{id}', [Admincontroller::class, 'deleteget'])->name('delete'); 