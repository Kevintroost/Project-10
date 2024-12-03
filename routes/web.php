<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\EventRequestController;


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

// Event Requests 
Route::get('event-requests/create', [EventRequestController::class, 'create'])->name('event-requests.create');
Route::post('event-requests/store', [EventRequestController::class, 'store'])->name('event-requests.store');