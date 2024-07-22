<?php

use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RuanganController::class,'index']);
