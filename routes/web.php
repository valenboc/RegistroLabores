<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaborController;

Route::get('/', [LaborController::class, 'index'])->name('labors.index');
Route::resource('labors', LaborController::class);
