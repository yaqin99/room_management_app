<?php

use App\Http\Controllers\RuanganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JamKuliahController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RuanganController::class,'index']);
Route::get('/admin', [RuanganController::class,'ruangan'])->middleware('AdminNotLogged');
Route::get('/admin/kategori/{kategoriId}', [RuanganController::class,'ruanganKategori'])->middleware('AdminNotLogged');
Route::get('/admin/gender/{genderiId}', [RuanganController::class,'ruanganGender'])->middleware('AdminNotLogged');
Route::get('/admin/jam', [JamKuliahController::class,'layout'])->middleware('AdminNotLogged');
Route::get('/admin/dosen', [DosenController::class,'layout'])->middleware('AdminNotLogged');
Route::get('/admin/loginView',[AdminController::class , 'loginView'])->middleware('AdminLogged');
Route::put('/admin/editJam/{id}', [JamKuliahController::class,'editJam']);
Route::put('/admin/editDosen/{id}', [DosenController::class,'editDosen']);
Route::put('/editRuangan/{id}', [RuanganController::class,'editRuangan']);
Route::post('/deleteRuangan/{id}', [RuanganController::class,'destroy']);
Route::post('/deleteJam/{id}', [JamKuliahController::class,'destroy']);
Route::post('/deleteDosen/{id}', [DosenController::class,'destroy']);
Route::post('/addRuangan', [RuanganController::class,'addRuangan']);
Route::post('/admin/tambahJam', [JamKuliahController::class,'addJam']);
Route::post('/admin/tambahDosen', [DosenController::class,'store']);
Route::post('/loginAdmin',[AdminController::class , 'login']);
Route::post('/logoutAdmin',[AdminController::class , 'logOut']);

