<?php

use App\Models\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/portofolio',[AboutController::class,'index']);

Route::get('/porto', function () {
    return view('front.index');
});


Route::get('/back/portofolio',[TamuController::class,'index']);
Route::get('/admin/tamu-cari',[TamuController::class,'cari']);
Route::get('/back/portofolio/delete/{id}',[TamuController::class,'destroy']);
Route::match(['get','post'],'/back/portofolio/update/{id}',[TamuController::class,'update']);

Route::get('/admin/setting',[AboutController::class,'index']);
Route::match(['get','post'],'/admin/setting/update/{id}',[AboutController::class,'update']);

Route::get('/admin/user',[CustomerController::class,'index']);

Route::match(['get','post'],'/',[TamuController::class,'store']);
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', TamuController::class);
        
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get('/node-server', 'NodeServerController@index');

// Delete Customer
Route::get('/admin/user/delete/{id}',[CustomerController::class,'destroy']);
// cetak Customer
Route::get('/cetak-user',[CustomerController::class,'cetakPegawai']);
Route::get('/cetak-pesan',[TamuController::class,'cetakPesan']);
