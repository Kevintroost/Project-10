<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactFormController extends Controller
{
    public function create()

    {
      
            return view('contact.create');
        
        
    }

    public function store(Request $request)
{
    // Validate the input
    $validated = $request->validate([
        'name' => 'required|string|min:5|max:255',
        'email' => 'required|email|min:5|max:255',
        'phone' => 'nullable|numeric',
        'details' => 'nullable|string|min:10|max:1000',
    ]);

    // Create and save the contact form data
    $contact = new ContactForm();
    $contact->name = $validated['name'];
    $contact->email = $validated['email'];
    $contact->phonenumber = $validated['phone'];
    $contact->message = $validated['details'];
    $contact->save();

    $url = url('/index');
    
    Mail::to($contact->email)->queue(new ContactMail($contact, $url));

    // Redirect with a success message
    return redirect('/contact/create')->with('success', 'Your message has been sent!');
}
}