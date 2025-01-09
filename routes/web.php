<?php

use App\Http\Controllers\ContactFormController;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use PHPUnit\Framework\Attributes\Group;
use App\Models\Event;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRequestController;
use App\Http\Controllers\FotoGalerieController;
use App\Models\FotoGalerie;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    $fotoGaleries = FotoGalerie::paginate(9);
    return view('index', compact('fotoGaleries'));
});

Route::get('/index', function () {
    $fotoGaleries = FotoGalerie::paginate(9);
    return view('index', compact('fotoGaleries'));
})->name('index');


Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/events/index', function () {
    $events = Event::all();
    $events = Event::paginate(8);
    return view('events.index', compact('events'));
});

Route::post('emails/create', [NewsletterSubscriberController::class, 'WelcomeNewsLetter'])->name('email.create');


Route::get('/admin/dashboard/events/create', function () {
    $events = Event::all();


    return view('events/create', compact('events'));

});

Route::delete('/admin/dashboard/events/destroy', [EventController::class, 'destroy'])->name('events.destroy');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
    });




    // request check list 

    // admin view
    Route::get('/admin/dashboard/event-request/index', [EventRequestController::class, 'index'])->name('event-request.index');
    Route::get('/api/event-requests', [EventRequestController::class, 'index']);
    Route::put('/api/event-requests/{id}', [EventRequestController::class, 'update']);
    Route::delete('/api/event-requests/{id}', [EventRequestController::class, 'destroy']);

    //

    Route::get('/admin/dashboard/image/create', [FotoGalerieController::class, 'create'])->name('images.create');
    Route::post('/admin/dashboard/image/store', [FotoGalerieController::class, 'Store'])->name('store');
    Route::delete('/admin/dashboard/image/destroy', [FotoGalerieController::class, 'Destroy'])->name('destroy');
    Route::post('Destroy', [LoginController::class, 'Destroy'])->middleware('auth')->name('logout');
    Route::post('Newsletter/create', [NewsletterSubscriberController::class, 'NewsLetterCreate'])->name('newsletter.create');
    Route::post('events/store', [EventController::class, 'Store'])->name('events.store');
});




Auth::routes();

// Event Requests 
// User input 
Route::get('event-request/create', [EventRequestController::class, 'create'])->name('event-request.create');
Route::post('event-request/store', [EventRequestController::class, 'store'])->name('event-request.store');

Route::get('contact/create', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('contact/store', [ContactFormController::class, 'store'])->name('contact.store');
