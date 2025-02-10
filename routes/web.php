<?php

use App\Http\Controllers\LeadsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadsController::class, 'index'])->name('lead-form');
Route::post('/save-lead', [LeadsController::class, 'store'])->name('store-lead');
