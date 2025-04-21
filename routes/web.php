<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

// Маршрут для работы с партнерами
Route::resource('partners', PartnerController::class);
Route::get('/partners/{partner}/history', [PartnerController::class, 'history'])->name('partners.history');

// Домашняя страница теперь перенаправляет на список партнеров
Route::get('/', function () {
    return redirect()->route('partners.index');
});
