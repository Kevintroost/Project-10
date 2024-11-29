<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('admin/admin-dashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/admin-dashboard', [LoginController::class, 'dashboard'])->middleware('auth');

Auth::routes();


