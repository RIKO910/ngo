<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('backend/pages/dashboard');
//});

//Route::get('/customer-list', [\App\Http\Controllers\CustomerListController::class, 'index'])->name('customer.list');

Route::resource('employees', \App\Http\Controllers\CustomerListController::class);
Route::resource('/', \App\Http\Controllers\DashboardController::class);

Route::post('/add-employee', [\App\Http\Controllers\CustomerListController::class, 'store'])->name('employee.store');

//Route::post('/add-employee', [EmployeeController::class, 'store'])->name('employee.store');

