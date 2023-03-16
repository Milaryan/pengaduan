<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
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
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [MasyarakatController::class, 'index']);
    Route::group(['prefix' => 'masyarakat'], function(){
        Route::get('/', [MasyarakatController::class, 'index']);
        Route::get('/home', [MasyarakatController::class, 'index']);
    });
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [PetugasController::class, 'dashboard'])->name('home');
    Route::get('/home', [PetugasController::class, 'dashboard'])->name('home');
    Route::get('/petugas',[PetugasController::class,'index'])->name('petugas');
    Route::get('/showpetugas/{id}',[PetugasController::class,'show'])->name('showpetugas');
    Route::get('/addpetugas',[PetugasController::class,'create'])->name('addpetugas');
    Route::post('/storepetugas',[PetugasController::class,'store'])->name('storepetugas');
    Route::get('/editpetugas/{id}',[PetugasController::class,'edit'])->name('editpetugas');
    Route::post('/updatepetugas/{id}',[PetugasController::class,'update'])->name('updatepetugas');
    Route::get('/droppetugas/{id}', [PetugasController::class, 'destroy'])->name('droppetugas');

    Route::get('/masyarakat',[MasyarakatController::class,'indexadmin'])->name('masyarakat');
    Route::get('/showmasyarakat/{id}',[MasyarakatController::class,'show'])->name('showmasyarakat');
    Route::get('/addmasyarakat',[MasyarakatController::class,'create'])->name('addmasyarakat');
    Route::post('/storemasyarakat',[MasyarakatController::class,'store'])->name('storemasyarakat');
    Route::get('/editmasyarakat/{id}',[MasyarakatController::class,'edit'])->name('editmasyarakat');
    Route::post('/updatemasyarakat/{id}',[MasyarakatController::class,'update'])->name('updatemasyarakat');
    Route::get('/dropmasyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('dropmasyarakat');

    Route::get('/pengaduan',[PengaduanController::class,'index'])->name('pengaduan');
    Route::get('/pengaduanterbaru',[PengaduanController::class,'terbaru'])->name('pengaduanterbaru');
    Route::get('/pengaduanproses',[PengaduanController::class,'proses'])->name('pengaduanproses');
    Route::get('/pengaduanselesai',[PengaduanController::class,'selesai'])->name('pengaduanselesai');
    Route::get('/showpengaduan/{id}',[PengaduanController::class,'show'])->name('showpengaduan');
    Route::get('/addpengaduan',[PengaduanController::class,'create'])->name('addpengaduan');
    Route::post('/storepengaduan',[PengaduanController::class,'store'])->name('storepengaduan');
    Route::get('/editpengaduan/{id}',[PengaduanController::class,'edit'])->name('editpengaduan');
    Route::post('/updatepengaduan/{id}',[PengaduanController::class,'update'])->name('updatepengaduan');
    Route::get('/droppengaduan/{id}', [PengaduanController::class, 'destroy'])->name('droppengaduan');

});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
    Route::post('/login-post', [LoginController::class, 'authenticate'])->name('loginpost');
    Route::get('/register', [LoginController::class, 'indexregis'])->name('regis');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

