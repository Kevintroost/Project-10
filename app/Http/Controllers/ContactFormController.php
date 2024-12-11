<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function create()

    {
      
            return view('contact.create');
        
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|email|min:5|max:255',
            'phone' => 'nullable|numeric',
            'details' => 'nullable|string|min:10|max:1000',
        ],);

        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phonenumber = $request->phone;
        $contact->message = $request->details;
        $contact->save();

        return redirect('/contact/create')->with('success', 'Your message has been sent!');
    }
}