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

Route::get('/admin', function () {
    return view('auth.login');
});




Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
        
    });

    Route::post('Destroy', [LoginController::class, 'Destroy'])->middleware('auth')->name('logout');
   
});




Auth::routes();

// Event Requests 
Route::get('event-requests/create', [EventRequestController::class, 'create'])->name('event-requests.create');
Route::post('event-requests/store', [EventRequestController::class, 'store'])->name('event-requests.store');