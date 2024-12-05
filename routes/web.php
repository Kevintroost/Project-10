<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\EventRequestController;
use App\Http\Controllers\FotoGalerieController;


Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/events/index', function () {
    return view('events.index');
});




Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
    });

    Route::get('/admin/dashboard/image/create', [FotoGalerieController::class, 'create'])->name('images.create');

    Route::post('Destroy', [LoginController::class, 'Destroy'])->middleware('auth')->name('logout');

});





Auth::routes();

// Event Requests 
Route::get('event-request/create', [EventRequestController::class, 'create'])->name('event-request.create');
Route::post('event-request/store', [EventRequestController::class, 'store'])->name('event-request.store');