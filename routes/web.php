<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'create']);
Route::get('/admin', function(){
    return view('admin');
});
Route::get('/contact', function (){
    return view('admin');
});
