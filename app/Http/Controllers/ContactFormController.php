<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use App\Models\ContactForm;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactFormController extends Controller
{
    public function Create()

    {
      
            return view('contact.create');
        
        
    }

    public function Store(Request $request)
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



public function destroy($id)
{
    ContactForm::findOrFail($id)->delete();
    return redirect()->route('contact.index')->with('success', 'Contact deleted successfully.');
}

}