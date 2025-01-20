<?php

use App\Http\Controllers\ContactFormController;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Models\Event;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRequestController;
use App\Http\Controllers\FotoGalerieController;
use App\Models\FotoGalerie;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Models\EventRequest;
use App\Models\Review;



Route::get('/', function () {
    // Fetch photos in a random order and paginate them
    $fotoGaleries = FotoGalerie::inRandomOrder()->paginate(6);
    return view('index', compact('fotoGaleries'));
});


Route::get('/index', function () {
    $fotoGaleries = FotoGalerie::inRandomOrder()->paginate(6);
    return view('index', compact('fotoGaleries'));
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('aboutus');


Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/events/index', function () {
    $events = Event::all();
    $events = Event::orderBy('event_date')->paginate(8);
    return view('events.index', compact('events'));
});

Route::post('emails/create', [NewsletterSubscriberController::class, 'WelcomeNewsLetter'])->name('email.create');


Route::get('/search', [EventController::class, 'search'])->name('search');
Route::patch('/event-requests/{id}/status', [EventRequestController::class, 'UpdateStatus'])->name('event-request.update-status');


Route::get('/events/show/{id}', function ($id) {
    $event = Event::find($id);
    return view('events.show', compact('event'));
})->name('events.show');

Route::get('/results', [EventController::class, 'Search'])->name('results');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', function () {
        $totalevent = Event::count();
        $totalcontact = ContactForm::count();
        $totaleventrequest = EventRequest::count();
        $totalreviews = Review::count();

        return view('admin.admin-dashboard', compact('totalevent', 'totalcontact', 'totaleventrequest', 'totalreviews'));
    });

    Route::delete('/admin/dashboard/events/destroy', [EventController::class, 'Destroy'])->name('events.destroy');

    Route::get('/admin/dashboard/events/create', function () {
        $events = Event::all();


        return view('events/create', compact('events'));

    });





    // admin view
    Route::get('/admin/dashboard/event-request/index', [EventRequestController::class, 'Index'])->name('event-request.index');
    Route::post('/api/event-requests', [EventRequestController::class, 'Data']);
    Route::put('/api/event-requests/{id}', [EventRequestController::class, 'Update'])->name('eventrequests.update');
    Route::delete('/api/event-requests/{id}', [EventRequestController::class, 'Destroy'])->name('eventrequests.destroy');
    Route::patch('/api/event-requests/{id}', [EventRequestController::class, 'UpdateStatus']);

    //

    Route::get('/admin/dashboard/image/create', [FotoGalerieController::class, 'Create'])->name('images.create');
    Route::post('/admin/dashboard/image/store', [FotoGalerieController::class, 'Store'])->name('store');
    Route::delete('/admin/dashboard/image/destroy', [FotoGalerieController::class, 'Destroy'])->name('destroy');
    Route::post('Destroy', [LoginController::class, 'Destroy'])->middleware('auth')->name('logout');
    Route::post('Newsletter/create', [NewsletterSubscriberController::class, 'NewsLetterCreate'])->name('newsletter.create');
    Route::post('events/store', [EventController::class, 'Store'])->name('events.store');

    Route::get('/admin/dashboard/contact/index', function () {

        $contacts = ContactForm::all();
        return view('contact.index', compact('contacts'));
    })->name('contact.index');

    Route::delete('/contacts/{id}', [ContactFormController::class, 'destroy'])->name('contact.destroy');

});









Auth::routes();

// Event Requests 
// User input 
Route::get('event-request/create', [EventRequestController::class, 'create'])->name('event-request.create');
Route::post('event-request/store', [EventRequestController::class, 'store'])->name('event-request.store');

Route::get('contact/create', [ContactFormController::class, 'Create'])->name('contact.create');
Route::post('contact/store', [ContactFormController::class, 'Store'])->name('contact.store');
