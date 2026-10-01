<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::redirect('/', '/mahasiswa');
Route::resource('mahasiswa', MahasiswaController::class);