<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\EventRequestController;


Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});





    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
        
    });






Auth::routes();

// Event Requests 
Route::get('event-request/create', [EventRequestController::class, 'create'])->name('event-request.create');
Route::post('event-request/store', [EventRequestController::class, 'store'])->name('event-request.store');