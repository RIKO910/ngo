<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend/pages/dashboard');
});

//Route::get('/customer-list', [\App\Http\Controllers\CustomerListController::class, 'index'])->name('customer.list');

Route::resource('employees', \App\Http\Controllers\CustomerListController::class);
