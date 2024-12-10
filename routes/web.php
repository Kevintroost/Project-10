<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use PHPUnit\Framework\Attributes\Group;
use App\Models\Event;
use App\Http\Controllers\EventRequestController;
use App\Http\Controllers\FotoGalerieController;
use App\Models\FotoGalerie;


Route::get('/', function () {
    $fotoGaleries = FotoGalerie::all();
    $fotoGaleries = FotoGalerie::paginate(9);
    return view('index', compact('fotoGaleries'));
});

Route::get('/index', function () {
    $fotoGaleries = FotoGalerie::all();
    $fotoGaleries = FotoGalerie::paginate(9);
    return view('index', compact('fotoGaleries'));
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/events/index', function () {
    $events = Event::all();
    $events = Event::paginate(10);
    return view('events.index' , compact('events'));
});


Route::get('/admin/dashboard/events/create', function () {
    $events = Event::all();


    return view('events/create', compact('events'));
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
    });

    Route::get('/admin/dashboard/image/create', [FotoGalerieController::class, 'create'])->name('images.create');
    Route::post('/admin/dashboard/image/store', [FotoGalerieController::class, 'Store'])->name('store');
    Route::delete('/admin/dashboard/image/destroy', [FotoGalerieController::class, 'Destroy'])->name('destroy');

    Route::post('Destroy', [LoginController::class, 'Destroy'])->middleware('auth')->name('logout');

});





Auth::routes();

// Event Requests 
Route::get('event-request/create', [EventRequestController::class, 'create'])->name('event-request.create');
Route::post('event-request/store', [EventRequestController::class, 'store'])->name('event-request.store');